<div class="row">
    <div class="col-lg-12">
        <div class="main-box clearfix">
            <header class="main-box-header clearfix">
                <h2 class="pull-left"><i class="fa fa-users"></i> Biodata Mahasiswa</h2> 
                <div class="filter-block pull-right">                                           
                    
                </div>
            </header>
            <div class="main-box-body clearfix">
                <div class="row">
                    <div class="col-sm-2">
                        <a href="<%=$this->Page->constructUrl('kemahasiswaan.ProfilMahasiswa',true,array('id'=>$this->getDataMHS('nim')))%>"><img src="<%=$this->setup->getAddress($this->getDataMHS('nim'))%>" alt="" onerror="no_photo(this,'resources/userimages/no_photo.png')" /></a>                        
                    </div>                   
                    <div class="col-sm-5">
                        <div class="form-horizontal">
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><strong>NO. FORMULIR: </strong></label>
                                <div class="col-sm-9">
                                    <p class="form-control-static"><%= $this->getDataMHS('no_formulir')%></p>
                                </div>                            
                            </div>                            
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><strong>NAMA MHS: </strong></label>
                                <div class="col-sm-9">
                                    <p class="form-control-static"><%= $this->getDataMHS('nama_mhs')%></p>
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><strong>JENIS KELAMIN: </strong></label>
                                <div class="col-sm-9">
                                    <p class="form-control-static"><%= $this->getDataMHS('jk')%></p>
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><strong>TEMPAT LAHIR: </strong></label>
                                <div class="col-sm-9">
                                    <p class="form-control-static"><%= $this->getDataMHS('tempat_lahir')%></p>
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><strong>TANGGAL LAHIR: </strong></label>
                                <div class="col-sm-9">
                                    <p class="form-control-static"><%= $this->TGL->tanggal('l, j F Y',$this->getDataMHS('tanggal_lahir'))%></p>
                                </div>                            
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <div class="form-horizontal"> 
                            <div class="form-group">
                                <label class="col-md-4 control-label"><strong>ALAMAT RUMAH: </strong></label>
                                <div class="col-md-8">
                                    <p class="form-control-static"><%= $this->getDataMHS('alamat_rumah')%></p>
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"><strong>NO. TELP / HP: </strong></label>
                                <div class="col-md-8">
                                    <p class="form-control-static"><%= $this->getDataMHS('telp_rumah')%> <%= $this->getDataMHS('telp_hp')%></p>
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"><strong>PROG. STUDI 1: </strong></label>
                                <div class="col-md-8">
                                    <p class="form-control-static"><%= $this->getDataMHS('nama_ps1')%> <%= $this->getDataMHS('diterima_ps1')%></p>
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label class="col-md-4 control-label"><strong>PROG. STUDI 2: </strong></label>
                                <div class="col-md-8">
                                    <p class="form-control-static"><%= $this->getDataMHS('nama_ps2')%> <%= $this->getDataMHS('diterima_ps2')%></p>
                                </div>                            
                            </div>
                            <div class="form-group">
                                <label class="col-sm-3 control-label"><strong>KELAS: </strong></label>
                                <div class="col-sm-9">
                                    <p class="form-control-static"><%= $this->getDataMHS('nkelas')%></p>
                                </div>                            
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>         
                            
