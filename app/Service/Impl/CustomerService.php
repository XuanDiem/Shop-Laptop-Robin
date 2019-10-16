<?php /** @noinspection ALL */


namespace App\Service\Impl;


use App\Customer;
use App\Reponsitory\CustomerRepositoryInterface;
use App\Reponsitory\Impl\CustomerRepository;
use App\Service\CustomerServiceInterface;
use http\Env\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class CustomerService implements CustomerServiceInterface
{

    public $customerRepository;

    public function __construct(CustomerRepository $customerRepository)
    {
        $this->customerRepository = $customerRepository;
    }

    public function getAll()
    {
        return $this->customerRepository->getAll();
    }


    public function store($request)
    {
        $customer = new Customer();
        $customer->id = $request->id;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->gender = $request->gender;
        $customer->employee_id = $request->employee_id;

        // Nếu fileImage  không tồn tại thì trường Image gán bằng NULL.
        if (!$request->hasFile('image')) {
            $customer->image = $request->image;
        } else {
            $fileImageOne = $request->image;

            //Lấy ra định dạng và tên mới của fileImage từ request.
            $fileExtension = $fileImageOne->getClientOriginalExtension();
            $fileImageTow = $request->images;
            //Gán tên mới cho fileImage trước khi lưu lên server.
            $newFileImage = "$fileImageTow.$fileExtension";
            //Lưu fileImage vào thư mục storage/app/public/image với tên mới.
            $request->file('image')->storeAs('public/images', $newFileImage);
            // Gán trường image của đối tượng customer với tên mới.
            $customer->image = $newFileImage;

            //$request->image = $newFileImage;

        }

        $message = "Create successfully customer $request->name :) ";
        Session::flash('action-success', $message);


        return $this->customerRepository->store($customer);
    }

    public function show($id)
    {
        return $this->customerRepository->show($id);

    }

    public function findById($id)
    {
        return $this->customerRepository->findById($id);
    }

    public function update($request, $id)
    {
        $customer = $this->customerRepository->findById($id);
        $customer->id = $request->id;
        $customer->name = $request->name;
        $customer->email = $request->email;
        $customer->address = $request->address;
        $customer->phone = $request->phone;
        $customer->gender = $request->gender;
        //$customer->image = $request->images;

        //cập nhật ảnh mới
        if($request->hasFile('images')){

            //xóa ảnh cũ nếu có
            $currentImage = $customer->image;
            if($currentImage){
                Storage::delete('public/images',$currentImage);
            }
            //chọn ảnh mới
            $newImage = $request->images->storeAs('public/images',$newImage);
            $customer->image = $newImage;
        }

        $message = "Edit successfully customer $customer->name :)";
        Session::flash('action-success', $message);

        return $this->customerRepository->update($customer);
    }

    public function destroy($id)
    {
        $message = "Delete successfully customer id : $id !";
        Session::flash('action-success', $message);
        return $this->customerRepository->destroy($id);
    }
}
