<?php
class MainPageM extends MainPage {   
    /**     
     * show page dosen [datamaster]
     */
    public $showDosen=false;
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
     * show page soal PMB [datamaster]
     */
    public $showSoalPMB=false;
    /**     
     * show page daftar mahasiswa [akademik kemahasiswaan]
     */
    public $showDaftarMahasiswa=false;   
    /**     
     * show page pendaftaran konsentrasi [akademik kemahasiswaan]
     */
    public $showPendaftaranKonsentrasi=false; 
    /**     
     * show page status mahasiswa [akademik kemahasiswaan]
     */
    public $showRekapStatusMahasiswa=false;
    /**     
     * show page pindah kelas [akademik kemahasiswaan]
     */
    public $showPindahKelas=false;
    /**     
     * show sub menu akademik daftar ulang [akademik daftar ulang calon mahasiswa]
     */
    public $showCalonMHS=false;        
    /**     
     * show sub menu akademik daftar ulang [akademik daftar ulang mahasiswa baru]
     */
    public $showDulangMHSBaru=false;    
    /**     
     * show sub menu akademik daftar ulang [akademik daftar ulang mahasiswa ekstension]
     */
    public $showDulangMHSEkstension=false; 
    /**     
     * show sub menu akademik daftar ulang [akademik daftar ulang mahasiswa ekstension]
     */
    public $showDulangMHSLulus=false;
    /**     
     * show sub menu akademik daftar ulang [akademik daftar ulang mahasiswa ekstension]
     */
    public $showDulangMHSNonAktif=false;
    /**     
     * show page PIN [spmb]
     */
    public $showPIN=false;
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
     * show page passing grade [spmb ujian PMB]
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
     * show page pembagian kelas [perkuliahan]
     */
    public $showPembagianKelas=false;      
    /**     
     * show page KRS Kelas Ekstension [perkuliahan]
     */
    public $showKRSEkstension=false;
    /**     
     * show page Peserta matakuliah [perkuliahan]
     */
    public $showPesertaMatakuliah=false;
    /**     
     * show page konversi sementara [akademik nilai]
     */
    public $showKonversiMatakuliah=false;
    /**     
     * show page transkrip asli [akademik nilai]
     */
    public $showTranskripFinal=false;
    /**     
     * show sub menu keuangan rekapitulasi[keuangan]
     */
    public $showSubMenuRekapKeuangan=false; 
    /**     
     * show page rekapitulasi pembayaran semester ganjil[keuangan]
     */
    public $showReportRekapPembayaranGanjil=false;
	public function onLoad ($param) {		
		parent::onLoad($param);				
        if (!$this->IsPostBack&&!$this->IsCallBack) {	           
        }
	}           
}
?>