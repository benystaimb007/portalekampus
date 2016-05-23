<?php
class MainPageM extends MainPage {            
    /**     
     * show sub menu [datamaster]
     */
    public $showDMaster=false;
    /**     
     * show page matakuliah [datamaster]
     */
    public $showMatakuliah=false;
    /**     
     * show sub menu kuesioner [dmaster kuesioner]
     */
    public $showSubMenuKuesioner=false;
    /**     
     * show page Kelompok Pertanyaan [dmaster kuesioner]
     */
    public $showKelompokPertanyaan=false;
    /**     
     * show page Daftar Pertanyaan [dmaster kuesioner]
     */
    public $showDaftarPertanyaan=false;
    /**     
     * show page daftar mahasiswa [akademik kemahasiswaan]
     */
    public $showDaftarMahasiswa=false;   
    /**     
     * show page pendaftaran konsentrasi [akademik kemahasiswaan]
     */
    public $showPendaftaranKonsentrasi=false;    
    /**     
     * show page variable [setting variable]
     */
    public $showVariable=false;
    /**     
     * show page konversi sementara [spmb]
     */
    public $showKonversiMatakuliah=false;
    /**     
     * show sub menu spmb pendaftaran
     */
    public $showSubMenuSPMBPendaftaran=false;
    /**     
     * show page pendaftaran via fo [spmb pendaftaran]
     */
    public $showPendaftaranViaFO=false;
    /**     
     * show page pendaftaran via Web [spmb pendaftaran]
     */
    public $showPendaftaranViaWeb=false;    
    /**     
     * show sub menu spmb Ujian PMB
     */
    public $showSubMenuSPMBUjianPMB=false;
    /**     
     * show page passing grade [ujian PMB]
     */
    public $showPassingGradePMB=false; 
    /**     
     * show page nilai ujian [ujian PMB]
     */
    public $showNilaiUjianPMB=false; 
    /**     
     * show page penyelenggaraan [perkuliahan]
     */
    public $showPenyelenggaraan=false;    
    /**     
     * show page KRS Kelas Ekstension [perkuliahan]
     */
    public $showKRSEkstension=false;
    /**     
     * show page Peserta matakuliah [perkuliahan]
     */
    public $showPesertaMatakuliah=false;
    /**     
     * show page transkrip asli [akademik nilai]
     */
    public $showTranskripAsli=false;
    /**     
     * show sub menu setting akademik[setting]
     */
    public $showSubMenuSettingAkademik=false;    
    /**     
     * show sub menu setting sistem[setting]
     */
    public $showSubMenuSettingSistem=false;
    /**     
     * show page user Manajemen [setting sistem]
     */
    public $showUserManajemen=false;
    /**     
     * show page user dosen [setting sistem]
     */
    public $showUserDosen=false;
    /**     
     * show page cache [setting sistem]
     */
    public $showCache=false;    
	public function onLoad ($param) {		
		parent::onLoad($param);				
        if (!$this->IsPostBack&&!$this->IsCallBack) {	           
        }
	}       
    /**
	* dapatkan angkatan	
	*/
	public function getAngkatan () {
		$dt =$this->DMaster->getListTA();		        
		$ta=$_SESSION['ta'];		
		$tahun_akademik=array('none'=>'All');
		while (list($k,$v)=each ($dt)) {
			if ($k != 'none') {
				if ($k <= $ta) {
					$tahun_akademik[$k]=$v;
				}
			}			
		}        
		return $tahun_akademik;
	}
}
?>