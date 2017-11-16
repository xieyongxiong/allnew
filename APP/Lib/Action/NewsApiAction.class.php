<?php
class NewsApiAction extends Action{
	public function getAllNews(){
		$data = M('allnew')->select();
		$this->ajaxReturn(array("code" => 200, "status"=>"success", "data"=>$data));

	}
}