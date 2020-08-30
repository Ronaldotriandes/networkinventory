<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		if($this->session->userdata('bebas')==''){
			$this->load->view('login');
		} else {
			$menu['isi']='dasboard';
			$this->load->view('menu_utama',$menu);
		}
		
	}
	public function ceklogin(){
        //ambil data dari form
        $ux = $this->input->post('username');
        //mirip sama $x = $_POST['username']
        $pc = $this->input->post('password');
        
        //mirip dengan 
        //mysqli_query("SELECT * FROM login WHERE username ='xxx' AND password ='yyy' "):
        $this->db->where('username',$ux); //nama kolom : username
        $this->db->where('password',$pc); //nama kolom : password
        $tes=$this->db->get('login'); // nama tabel : user

        if ($tes->num_rows ){ //user dan pass cocok, ada di DB
            $row=$tes->row();
           $nama=$row->username;
            $jabatan=$row->jabatan;
            $this->session->set_userdata('nama',$nama);
                $this->session->set_userdata('jabatan',$jabatan);
            $this->session->set_userdata('bebas','terserah');
            //$this->session->set_userdata('kode_pembelian','belum');
//$this->session->set_userdata('kode_eceran','belum');
           //$this->session->set_userdata('kode_grosir','belum');
  			$menu['isi']='dasboard';
			$this->load->view('menu_utama',$menu);

        }else{
            //lempar ke cotroller tes fungsi view
            $this->load->view('login');
             echo "
                <script>
                    alert('username dan Password tidak cocok! Periksa kembali');                </script>
            ";
        }

    }
    public function logout(){
    	$this->session->sess_destroy();
    	$this->load->view('login');
    }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */