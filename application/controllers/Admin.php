<?php
// session_start();
if (!defined('BASEPATH'))

    exit('No direct script access allowed');

class Admin extends CI_Controller

{

    /*  

     *  Developed by: Active IT zone

     *  Date    : 14 July, 2015

     *  Active Supershop eCommerce CMS

     *  http://codecanyon.net/user/activeitezone

     */

    

    function __construct()

    {

        parent::__construct();

        $this->load->database();

        //$this->load->library('paypal');

        /*cache control*/

        $this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');

        $this->output->set_header('Pragma: no-cache');
       //$this->load->library('session');
       
			$this->load->library('upload');

    }

    

    /* index of the vadmin. Default: Dashboard; On No Login Session: Back to login page. */

	public function index()
	{
		
			$this->load->view('back/index');
		
	}
	function add(){
		$this->load->view('back/category_add');
	}
	
	function category($para1='',$para2='',$para3=''){

		if($para1=='list'){
			$page_data['reg']=$this->db->query("select * from category_list order by id desc")->result_array();
			$this->load->view('back/category_list',$page_data);
		}else if($para1=='add'){
			$this->load->view('back/category_add');
		}else if($para1=='do_add'){
		
			$data['name']=$this->input->post('name');
			$data['description']=$this->input->post('description');
			$data['image']=$this->input->post('image');
			$data['status']=$this->input->post('status');
			$this->db->insert('category_list',$data);
			redirect(base_url()."index.php/admin/category/list");
		}else if($para1=='edit'){
			$page_data['reg']=$this->db->query("select * from category_list where id='".$para2."' ")->result_array();
			$this->load->view('back/category_edit',$page_data);
			
		}else if($para1=='do_update'){
			$data['name']=$this->input->post('name');
			$data['description']=$this->input->post('description');
			$data['image']=$this->input->post('image');
			$data['status']=$this->input->post('status');
			$this->db->where('id',$para2);
			$this->db->update('category_list',$data);
			redirect(base_url()."index.php/admin/category/list");
		}else if($para1=='delete'){
			$this->db->where('id',$para2);
			$this->db->delete('category_list');
			redirect(base_url()."index.php/admin/category/list");
		}
	}

	function subcategory($para1='',$para2='',$para3=''){
		if($para1=='list'){
			$page_data['reg']=$this->db->query("select * from subcategory_list order by id desc")->result_array();
			$this->load->view('back/subcategory_list',$page_data);
		}else if($para1=='add'){
			$this->load->view('back/subcategory_add');
		}else if($para1=='do_add'){
			$data['categoryname']=$this->input->post('c_name');
			$data['subcategoryname']=$this->input->post('name');
			$data['description']=$this->input->post('description');
			$data['image']=$this->input->post('image');
			$data['status']=$this->input->post('status');
			$this->db->insert('subcategory_list',$data);
			redirect(base_url()."index.php/admin/subcategory/list");
		}else if($para1=='edit'){
			$page_data['reg']=$this->db->query("select * from subcategory_list where id='".$para2."' ")->result_array();
			$this->load->view('back/subcategory_edit',$page_data);
			
		}else if($para1=='do_update'){
			$data['categoryname']=$this->input->post('c_name');
			$data['name']=$this->input->post('name');
			$data['description']=$this->input->post('description');
			$data['image']=$this->input->post('image');
			$data['status']=$this->input->post('status');
			$this->db->where('id',$para2);
			$this->db->update('subcategory_list',$data);
			redirect(base_url()."index.php/admin/subcategory/list");
		}else if($para1=='delete'){
			$this->db->where('id',$para2);
			$this->db->delete('subcategory_list');
			redirect(base_url()."index.php/admin/subcategory/list");
		}

	}

	function blog($para1='',$para2='',$para3=''){
		if($para1=='list'){
			$page_data['reg']=$this->db->query("select * from blog")->result_array();
			$this->load->view('back/blog_list',$page_data);
		}else if($para1=='add'){
			$this->load->view('back/blog_add');
		}else if($para1=='do_add'){
			$data['title']=$this->input->post('title');
			$data['slug']=$this->input->post('slug');
			$data['short_desc']=$this->input->post('short_desc');
			$data['long_desc']=$this->input->post('long_desc');
			$data['image']=$this->input->post('image');
			$data['reg_date']=$this->input->post('reg_date');
			$data['uploaded_by']=$this->input->post('uploaded');
			$data['seo_title']=$this->input->post('seo_title');
			$data['seo_meta']=$this->input->post('seo_meta');
			$data['seo_desc']=$this->input->post('seo_desc');
			$data['status']=$this->input->post('status');
			$this->db->insert('blog',$data);
			redirect(base_url()."index.php/admin/blog/list");
			
		}else if($para1=='edit'){
			$page_data['reg']=$this->db->query("select * from blog where id='".$para2."' ")->result_array();
			$this->load->view('back/blog_edit',$page_data);
		}else if($para1=='do_update'){
			$data['title']=$this->input->post('title');
			$data['slug']=$this->input->post('slug');
			$data['short_desc']=$this->input->post('short_desc');
			$data['long_desc']=$this->input->post('long_desc');
			$data['image']=$this->input->post('image');
			$data['reg_date']=$this->input->post('reg_date');
			$data['uploaded_by']=$this->input->post('uploaded');
			$data['seo_title']=$this->input->post('seo_title');
			$data['seo_meta']=$this->input->post('seo_meta');
			$data['seo_desc']=$this->input->post('seo_desc');
			$data['status']=$this->input->post('status');
			$this->db->where('id',$para2);
			$this->db->update('blog',$data);
			redirect(base_url()."index.php/admin/blog/list");
		}else if($para1='delete'){
			$this->db->where('id',$para2);
			$this->db->delete('blog');
			redirect(base_url()."index.php/admin/blog/list");
		}
	}

	function product($para1='',$para2='',$para3=''){
		if($para1=='list'){
			$page_data['reg']=$this->db->query("Select * from products order by id desc ")->result_array();
			$this->load->view('back/product_list',$page_data);
		}else if($para1=='add'){
			$this->load->view('back/product_add.php');
		}else if($para1=='do_add'){
			$data['cat_name']=$this->input->post('cat_name');
			$data['subcat_name']=$this->input->post('subcat_name');
			$data['product_name']=$this->input->post('product_name');
			$data['slug']=$this->input->post('slug');
			$data['seller_price']=$this->input->post('seller_price');
			$data['buyer_price']=$this->input->post('buyer_price');
			$data['offer_price']=$this->input->post('offer_price');
			$data['weight']=$this->input->post('weight');
			$data['size']=$this->input->post('size');
			$data['dimension']=$this->input->post('dimension');
			$data['image1']=$this->input->post('image1');
			$data['image2']=$this->input->post('image2');
			$data['image3']=$this->input->post('image3');
			$data['image4']=$this->input->post('image4');
			$data['image5']=$this->input->post('image5');
			$data['short_desc']=$this->input->post('short_desc');
			$data['long_desc']=$this->input->post('long_desc');
			$data['attribute1']=$this->input->post('attribute1');
			$data['attribute2']=$this->input->post('attribute2');
			$data['attribute3']=$this->input->post('attribute3');
			$data['seo_title']=$this->input->post('seo_title');
			$data['seo_meta']=$this->input->post('seo_meta');
			$data['seo_desc']=$this->input->post('seo_desc');
			$data['status']=$this->input->post('status');
			$this->db->insert('products',$data);
			redirect(base_url()."index.php/admin/product/list");
		}else if($para1=='edit'){
			$page_data['reg']=$this->db->query("select * from products where id='".$para2."' ")->result_array();
			$this->load->view('back/product_edit',$page_data);	
		}else if($para1=='do_update'){
			$data['cat_name']=$this->input->post('cat_name');
			$data['subcat_name']=$this->input->post('subcat_name');
			$data['product_name']=$this->input->post('product_name');
			$data['slug']=$this->input->post('slug');
			$data['seller_price']=$this->input->post('seller_price');
			$data['buyer_price']=$this->input->post('buyer_price');
			$data['offer_price']=$this->input->post('offer_price');
			$data['size']=$this->input->post('size');
			$data['weight']=$this->input->post('weight');
			$data['dimension']=$this->input->post('dimension');
			$data['image1']=$this->input->post('image1');
			$data['image2']=$this->input->post('image2');
			$data['image3']=$this->input->post('image3');
			$data['image4']=$this->input->post('image4');
			$data['image5']=$this->input->post('image5');
			$data['short_desc']=$this->input->post('short_desc');
			$data['long_desc']=$this->input->post('long_desc');
			$data['attribute1']=$this->input->post('attribute1');
			$data['attribute2']=$this->input->post('attribute2');
			$data['attribute3']=$this->input->post('attribute3');
			$data['seo_title']=$this->input->post('seo_title');
			$data['seo_meta']=$this->input->post('seo_meta');
			$data['seo_desc']=$this->input->post('seo_desc');
			$data['status']=$this->input->post('status');
			$this->db->where('id',$para2);
			$this->db->update('products',$data);
			redirect(base_url()."index.php/admin/product/list");
		}else if($para1=='delete'){
			$this->db->where('id',$para2);
			$this->db->delete('products');
			redirect(base_url()."index.php/admin/product/list");
		}
	}

	function package($para1='',$para2='',$para3=''){
		if($para1=='list'){
			$data_page['reg']=$this->db->query("select * from package order by id desc")->result_array();
			$this->load->view('back/package_list',$data_page);
		}else if($para1=='add'){
			$this->load->view('back/package_add');
		}else if($para1=='do_add'){
			$data['name']=$this->input->post('name');
			$data['duration']=$this->input->post('duration');
			$data['price']=$this->input->post('price');
			$data['name1']=$this->input->post('name1');
			$data['name2']=$this->input->post('name2');
			$data['value1']=$this->input->post('value1');
			$data['value2']=$this->input->post('value2');
			$data['description']=$this->input->post('description');
			$data['image']=$this->input->post('image');
			$data['status']=$this->input->post('status');
			$this->db->insert('package',$data);
			redirect(base_url()."index.php/admin/package/list");
		}else if($para1=='edit'){
			$data_page['reg']=$this->db->query("select * from package where id='".$para2."' ")->result_array();
			$this->load->view('back/package_edit',$data_page);
		}else if($para1=='do_update'){
			$data['name']=$this->input->post('name');
			$data['duration']=$this->input->post('duration');
			$data['price']=$this->input->post('price');
			$data['name1']=$this->input->post('name1');
			$data['name2']=$this->input->post('name2');
			$data['value1']=$this->input->post('value1');
			$data['value2']=$this->input->post('value2');
			$data['description']=$this->input->post('description');
			$data['image']=$this->input->post('image');
			$data['status']=$this->input->post('status');
			$this->db->where('id',$para2);
			$this->db->update('package',$data);
			redirect(base_url()."index.php/admin/package/list");
		}else if($para1='delete'){
			$this->db->where('id',$para2);
			$this->db->delete('package');
			redirect(base_url()."index.php/admin/package/list");
	
		}
	}

	function agent($para1='',$para2='',$para3=''){
		if($para1=='list'){
			$data_page['reg']=$this->db->query("select * from manage_agent order by id desc")->result_array();
			$this->load->view('back/agent_list',$data_page);
		}else if($para1=='add'){
			$this->load->view('back/agent_add');
		}else if($para1=='do_add'){
			$data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['password']=$this->input->post('password');
			$data['mobile']=$this->input->post('mobile');
			$data['address']=$this->input->post('address');
			$data['country']=$this->input->post('country');
			$data['state']=$this->input->post('state');
			$data['city']=$this->input->post('city');
			$data['commission']=$this->input->post('commission');
			$data['status']=$this->input->post('status');
			$this->db->insert('manage_agent',$data);
			redirect(base_url()."index.php/admin/agent/list");
		}else if($para1=='edit'){
			$data_page['reg']=$this->db->query("select * from manage_agent where id='".$para2."' ")->result_array();
			$this->load->view('back/agent_edit',$data_page);
		}else if($para1=='do_update'){
			$data['name']=$this->input->post('name');
			$data['email']=$this->input->post('email');
			$data['password']=$this->input->post('password');
			$data['mobile']=$this->input->post('mobile');
			$data['address']=$this->input->post('address');
			$data['country']=$this->input->post('country');
			$data['state']=$this->input->post('state');
			$data['city']=$this->input->post('city');
			$data['commission']=$this->input->post('commission');
			$data['status']=$this->input->post('status');
			$this->db->where('id',$para2);
			$this->db->update('manage_agent',$data);
			redirect(base_url()."index.php/admin/agent/list");
		}else if($para1='delete'){
			$this->db->where('id',$para2);
			$this->db->delete('manage_agent');
			redirect(base_url()."index.php/admin/agent/list");
		}
	}



}
