<?php
//require('./model/customers.php');
class customersController
{
    public function  showList(){
        if(isset($_SESSION['customers'])){
            $customers = $_SESSION['customers'];
        }else{
            $customers = [];
        }
        include('view/customers/customer_list.php');
    }

    public function  showAddForm(){
        include('view/customers/add_customer.php');
    }

    public function  addCustomer(){
        //get new customer info
        $email = filter_input(INPUT_POST, 'email');
        $password = filter_input(INPUT_POST, 'password');
        $name = filter_input(INPUT_POST, 'name');
        $phone = filter_input(INPUT_POST, 'phone');

        //get current max id from session
        if(isset($_SESSION['max_id'])){
            $id = $_SESSION['max_id']+1;
        }else{
            $id = 1;
        }
        $_SESSION['max_id'] = $id;

        // create new customer model
        $customer = new CustomerModel($id,$email,$name,$password,$phone);

        // save to session
        if(isset($_SESSION['customers'])){
            $customers = $_SESSION['customers'];
        }else{
            $customers = [];
        }
        $customers[] = $customer;
        $_SESSION['customers'] = $customers;
        include('view/customers/customer_list.php');
    }

    public function  deleteCustomer($id){
        // get customer list
        if(isset($_SESSION['customers'])){
            $customers = $_SESSION['customers'];
        }else{
            $customers = [];
        }
        foreach($customers as $key => $customer){
            if($customer->getCustomerID() == $id){
                unset($customers[$key]);
                break;
            }
        }
        $_SESSION['customers'] = $customers;
        include('view/customers/customer_list.php');
    }

    public function  searchByName(){
        //get name
        $name = filter_input(INPUT_POST, 'name');
        echo $name;
        
        // get customer list
        if(isset($_SESSION['customers'])){
            $customers = $_SESSION['customers'];
        }else{
            $customers = [];
        }
        $searchArray = [];
        foreach($customers as $customer){
            if($customer->getName() == $name){
                $searchArray[] = $customer;
                break;
            }
        }
        $customers = $searchArray;
        include('view/customers/customer_list.php');
    }

}