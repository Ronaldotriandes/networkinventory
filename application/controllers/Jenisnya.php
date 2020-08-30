 <?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

 class Jenisnya extends CI_Controller {
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
 	public function __construct(){
        parent::__construct(); 
        if ($this->session->userdata('bebas')==NULL) {
            redirect('login');
        } 
    } 
    public function lihatdatac(){
    	$menu['isi']='data_master/lihat_datacenter';
    	$this->load->view('menu_utama',$menu);
    }
    public function lihat(){
    	$menu['isi']='data_master/j_pencarian';
    	$this->load->view('menu_utama',$menu);
    }
 public function jenis(){
    	//$menu['barang']=$this->db->get('barang');
		$menu['isi']='jenis';
		$this->load->view('menu_utama',$menu);
    }
    public function reg(){
    	$menu['isi']='data_master/register';
    	$this->load->view('menu_utama',$menu);
    }
 public function form_server() 
	{	
		$menu['Server']=$this->db->get('Server');
		$menu['isi']='data_master/form_server';
		$this->load->view('menu_utama',$menu);
	}
	public function form_switch()
	{
		$menu['Switch']=$this->db->get('Switch');
		$menu['isi']='data_master/form_switch';
		$this->load->view('menu_utama',$menu);
	}
	public function coba() 
	{	
		//$menu['Server']=$this->db->get('Server');
		$menu['isi']='data_master/coba';
		$this->load->view('menu_utama',$menu);
	}
	public function form_edit_server() 
	{	
		$this->db->where('Idserver',$_GET['Idserver']);
		$menu['server']=$this->db->get('Server');
		$menu['isi']='form_edit/form_server';
		$this->load->view('menu_utama',$menu);
	}
	public function form_edit_switch()
	{
		$this->db->where('Idswitch',$_GET['Idswitch']);
		$menu['switch']=$this->db->get('Switch');
		$menu['isi']='form_edit/form_switch';
		$this->load->view('menu_utama',$menu);
	}
	public function delete_server()
	{
		$this->db->where('Idserver',$_GET['Idserver']);
		//$this->db->delete('Idserver','Tahun','Merk','Harddisk','Memory','Prosesor','os','Hostname','Pemilik');
		$this->db->delete('Server');
		$menu['server']=$this->db->get('Server');
		redirect('Jenisnya/form_server');
	}
	public function delete_switch()
	{
		$this->db->where('Idswitch',$_GET['Idswitch']);
		//$this->db->delete('Idserver','Tahun','Merk','Harddisk','Memory','Prosesor','os','Hostname','Pemilik');
		$this->db->delete('Switch');
		$menu['switch']=$this->db->get('Switch');
		redirect('Jenisnya/form_switch');
	}

 public function save_server(){
		$data['Idserver']=$_POST['Idserver'];
		$data['Tahun']=$_POST['Tahun'];
		$data['Merk']=$_POST['Merk'];
		$data['Harddisk']=$_POST['Harddisk'];
		//$data['harga_beli']=0;//
		$data['Memory']=$_POST['Memory'];
		$data['Prosesor']=$_POST['Prosesor'];
		$data['Os']=$_POST['Os'];
		$data['Hostname']=$_POST['Hostname'];
		$data['Pemilik']=$_POST['Pemilik'];
		$data['Bidang']=$_POST['Bidang'];
		$data['Seksi']=$_POST['Seksi'];
		$data['Lantai']=$_POST['Lantai'];
		$data['Rak']=$_POST['Rak'];
		$data['Konfigurasi']=$_POST['Konfigurasi'];
		$data['Penanggungjawab']=$_POST['Penanggungjawab'];
		//$data['harga_jual_eceran']=0;
		//$data['harga_jual_grosir']=0;
		$this->db->insert('Server',$data);

		redirect('Jenisnya/form_server');
	}
	public function save_switch(){
		$data['Idswitch']=$_POST['Idswitch'];
		$data['Hostname']=$_POST['Hostname'];
		$data['Lokasi']=$_POST['Lokasi'];
		$data['Tahun']=$_POST['Tahun'];
		//$data['harga_beli']=0;//
		$data['Merk']=$_POST['Merk'];
		$data['Os']=$_POST['Os'];
		$data['DMZ']=$_POST['DMZ'];
		$data['LAN']=$_POST['LAN'];
		$data['Manage']=$_POST['Manage'];
		$data['Pemilik']=$_POST['Pemilik'];
		$data['Bidang']=$_POST['Bidang'];
		$data['Seksi']=$_POST['Seksi'];
		$data['lantai']=$_POST['lantai'];
		$data['Rak']=$_POST['Rak'];
		$data['konfigurasi']=$_POST['konfigurasi'];
		$data['Penanggungjawab']=$_POST['Penanggungjawab'];
		//$data['harga_jual_eceran']=0;
		//$data['harga_jual_grosir']=0;
		$this->db->insert('Switch',$data);
		   echo "
                <script>
                    alert('Data Berhasil Disimpan');                </script>
            ";
		redirect('Jenisnya/form_switch');
	}
	public function melihat_semua(){
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Pemilik','Diskominfo');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$this->db->select('*');
		$this->db->from('Switch');
		$this->db->like('Pemilik','Diskominfo');
		$querys=$this->db->get();
		$menu['Switch']=$querys;
		$menu['isi']='data_master/lihat_semua';
		$this->load->view('menu_utama',$menu);
	}
	public function lihat_bidang1()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Bidang','E-Gov');
		$query=$this->db->get();

		$menu['Seerver']=$query;
		$this->db->select('*');
		$this->db->from('Switch');
		$this->db->like('Bidang','E-Gov');
		$querys=$this->db->get();

		$menu['Switch']=$querys;
		$menu['isi']='data_master/lihat_semua';
		$this->load->view('menu_utama',$menu);
	}
	public function lihat_kasi1()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Bidang','E-Gov');
		$this->db->like('Seksi','K_1');
		$query=$this->db->get();

		$menu['Seerver']=$query;
		$this->db->select('*');
		$this->db->from('Switch');
		$this->db->like('Bidang','E-Gov');
		$querys=$this->db->get();

		$menu['Switch']=$querys;
		$menu['isi']='data_master/lihat_semua';
		$this->load->view('menu_utama',$menu);
	}
	public function lihat_kasi2(){
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Bidang','E-Gov');
		$this->db->like('Seksi','K_2');
		$query=$this->db->get();

		$menu['Seerver']=$query;
		$this->db->select('*');
		$this->db->from('Switch');
		$this->db->like('Bidang','E-Gov');
		$this->db->like('Seksi','K_2');
		$querys=$this->db->get();

		$menu['Switch']=$querys;
		$menu['isi']='data_master/lihat_semua';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_server()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr1()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','1');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr14()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','1');
		$this->db->like('Tahun','2014');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr15()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','1');
		$this->db->like('Tahun','2015');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr16()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','1');
		$this->db->like('Tahun','2016');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr17()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','1');
		$this->db->like('Tahun','2017');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr18()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','1');
		$this->db->like('Tahun','2018');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr2()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','2');
		//$this->db->like('Tahun','2014')
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr214()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','2');
		$this->db->like('Tahun','2014');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr215()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','2');
		$this->db->like('Tahun','2015');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr216()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','2');
		$this->db->like('Tahun','2016');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr217()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','2');
		$this->db->like('Tahun','2017');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr218()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','2');
		$this->db->like('Tahun','2018');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr3()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','3');
		//$this->db->like('Tahun','2014')
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr314()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','3');
		$this->db->like('Tahun','2014');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr315()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','3');
		$this->db->like('Tahun','2015');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr316()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','3');
		$this->db->like('Tahun','2016');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr317()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','3');
		$this->db->like('Tahun','2017');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr318()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','3');
		$this->db->like('Tahun','2018');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr4()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','4');
		//$this->db->like('Tahun','2015')
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr414()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','4');
		$this->db->like('Tahun','2014');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr415()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','4');
		$this->db->like('Tahun','2015');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr416()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','4');
		$this->db->like('Tahun','2016');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr417()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','4');
		$this->db->like('Tahun','2017');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_serverr418()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Rak','4');
		$this->db->like('Tahun','2018');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_server1()
	{
		$this->db->select('*');
		$this->db->from('Server');
		$this->db->like('Bidang','E-Gov');
		$this->db->like('Seksi','K_1');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Seerver']=$query;
		$menu['isi']='data_master/lihat_server';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_switch1(){
		$this->db->select('*');
		$this->db->from('Switch');
		$this->db->like('Bidang','E-Gov');
		$this->db->like('Seksi','K_1');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Switch']=$query;
		$menu['isi']='data_master/lihat_switch';
		$this->load->view('menu_utama',$menu);
	}
	public function melihat_switch(){
		$this->db->select('*');
		$this->db->from('Switch');
		$this->db->like('Pemilik','Diskominfo');
		$query=$this->db->get();

		//$query=$this->db->query("SELECT * FROM Server WHERE Pemilik ='Diskominfo'"):
//		$this->db->where('Pemilik','Diskominfo');
//		$this->db->get('server');
		$menu['Switch']=$query;
		$menu['isi']='data_master/lihat_switch';
		$this->load->view('menu_utama',$menu);
	}
	public function save_user(){
		$data['nama']=$_POST['nama'];
		$data['jabatan']='User';
		$data['username']=$_POST['username'];
		$data['password']=$_POST['password'];
		//$data['harga_beli']=0;//

		$this->db->insert('Login',$data);

		redirect('Jenisnya/reg');
	}
	public function save_edit_server(){
		$data['Tahun']=$_POST['Tahun'];
		$data['Merk']=$_POST['Merk'];
		$data['Harddisk']=$_POST['Harddisk'];
		//$data['harga_beli']=0;//
		$data['Memory']=$_POST['Memory'];
		$data['Prosesor']=$_POST['Prosesor'];
		$data['Os']=$_POST['Os'];
		$data['Hostname']=$_POST['Hostname'];
		$data['Pemilik']=$_POST['Pemilik'];
		$data['Bidang']=$_POST['Bidang'];
		$data['Seksi']=$_POST['Seksi'];
		$data['lantai']=$_POST['lantai'];
		$data['Rak']=$_POST['Rak'];
		$data['konfigurasi']=$_POST['konfigurasi'];
		$data['Penanggungjawab']=$_POST['Penanggungjawab'];
		$this->db->where('Idserver',$_POST['Idserver']);
        $this->db->update('Server',$data);
		redirect('Jenisnya/form_server');
	}
	public function save_edit_switch(){
		$data['Idswitch']=$_POST['Idswitch'];
		$data['Hostname']=$_POST['Hostname'];
		$data['Lokasi']=$_POST['Lokasi'];
		$data['Tahun']=$_POST['Tahun'];
		//$data['harga_beli']=0;//
		$data['Merk']=$_POST['Merk'];
		$data['Os']=$_POST['Os'];
		$data['DMZ']=$_POST['DMZ'];
		$data['LAN']=$_POST['LAN'];
		$data['Manage']=$_POST['Manage'];
		$data['Pemilik']=$_POST['Pemilik'];
		$data['Bidang']=$_POST['Bidang'];
		$data['Seksi']=$_POST['Seksi'];
		$data['lantai']=$_POST['lantai'];
		$data['Rak']=$_POST['Rak'];
		$data['konfigurasi']=$_POST['konfigurasi'];
		$data['Penanggungjawab']=$_POST['Penanggungjawab'];
		$this->db->where('Idswitch',$_POST['Idswitch']);
        $this->db->update('Switch',$data);
		redirect('Jenisnya/form_switch');
	}
}