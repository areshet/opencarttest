<?php
Class ControllerCommonTest extends Controller{
	public function index(){

		require('admin/model/customer/customer.php');
		$adminCustomerModel = new ModelCustomerCustomer( $this->registry );
		$totalcustomer = $adminCustomerModel->getTotalCustomers();
		$data['totalcustomer'] = $totalcustomer;

		$this->load->model('account/order');
		$totalorder = $this->model_account_order->getTotalOrders();
		$data['totalorder'] = $totalorder;

		return $this->load->view('common/test', $data);
	}
}

?>