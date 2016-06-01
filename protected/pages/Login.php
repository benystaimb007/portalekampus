<?php
class Login extends MainPage { 
    public function OnPreInit ($param) {	
		parent::onPreInit ($param);	
		$this->MasterClass="Application.layouts.LoginTemplate";				
        $this->Theme='default';
	}
	public function onLoad($param) {		
		parent::onLoad($param);				
		if (!$this->IsPostBack&&!$this->IsCallBack) {            
		}
	}
    private function getGoingToPage () {		
		switch ($this->cmbGoingTo->Text) {
			case 'm' :
				$page = 'Manajemen';
			break;
			case 'k' :
				$page = 'Keuangan';
			break;
            case 'b' :
				$page = 'Bank';
			break;
            case 'd' :
				$page = 'Dosen';
			break;
			case 'dw' :
				$page = 'DosenWali';
			break;
			case 'mh' :
				$page = 'Mahasiswa';
			break;
			case 'mb' :
				$page = 'MahasiswaBaru';
			break;		
			case 'ot' :
				$page = 'OrangtuaWali';
			break;
		}		
		return $page;
	}
	public function checkUsernameAndPassword($sender,$param) {		
        $username=$param->Value;
        if ($username != '') {
            try {  
                $auth = $this->Application->getModule ('auth');	
                $page=$this->getGoingToPage ();		
                $password = trim(addslashes($this->txtPassword->Text));
                if (!$auth->login ($username.'/'.$page,$password)){			                    
                    throw new Exception ("Gagal. Silahkan masukan username dan password dengan benar.");						
                }        
            }catch (Exception $e) {		
                $message='<br /><div class="alert alert-danger">
                    <strong>Error!</strong>
                    '.$e->getMessage().'</div>';
				$sender->ErrorMessage=$message;					
				$param->IsValid=false;		
			}
        }							
		
	}    
    public function checkUsernameFormat($sender,$param) {		
        $username=$param->Value;
        if ($username != '') {
            try {  
                if (!preg_match('/^[a-z\d_]{1,20}$/i', $username)||filter_var($username,FILTER_VALIDATE_EMAIL)) {			                    
                    throw new Exception ("Gagal. Silahkan masukan username dan password dengan benar.");
                }
            }catch (Exception $e) {		
                $message='<br /><div class="alert alert-danger">
                    <strong>Error!</strong>
                    '.$e->getMessage().'</div>';
				$sender->ErrorMessage=$message;					
				$param->IsValid=false;		
			}
        }							
		
	}
    public function doLogin ($sender,$param) {
        if ($this->IsValid) {                        
            $pengguna=$this->getLogic('Users');            
            switch ($pengguna->getTipeUser()) {
                case 'm' :
                    $dmaster=$this->getLogic('DMaster');
                    //daftar prodi diload saat awal, tujuannya supaya tidak terus2an diload.
                    $_SESSION['daftar_jurusan']=$dmaster->getListProgramStudi(2);
                break;                
                case 'k' :
                    $dmaster=$this->getLogic('DMaster');
                    //daftar prodi diload saat awal, tujuannya supaya tidak terus2an diload.
                    $_SESSION['daftar_jurusan']=$dmaster->getListProgramStudi(2);
                break; 
                case 'mb' :
                    $dmaster=$this->getLogic('DMaster');
                    //daftar prodi diload saat awal, tujuannya supaya tidak terus2an diload.
                    $_SESSION['daftar_jurusan']=$dmaster->getListProgramStudi(2);
                break; 
            }            
            $_SESSION['kjur']=1;
            $setup=$this->getLogic('Setup');            
            $_SESSION['ta']=$setup->getSettingValue('default_ta');
            $_SESSION['semester']=$setup->getSettingValue('default_semester');            
            
            $_SESSION['tahun_masuk']=$_SESSION['ta'];
            $_SESSION['kelas']='none';
            $_SESSION['foto']='no_photo.png';
            $_SESSION['theme']=$pengguna->getDataUser('theme');
                
            $_SESSION['outputreport']='pdf';
            $_SESSION['outputcompress']='none';
            
            $this->redirect('Home',true);
        }
    }    
}
?>