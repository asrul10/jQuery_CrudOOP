<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>jQuery CrudOOP</title>

        <!-- Bootstrap CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/a-design.css">        
        <link href="font-awesome-4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <link href="css/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <header>
        <div class="garis">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h1><i class="fa fa-table"></i> jQuery CRUD OOP</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3"></div>
                    <div class="col-lg-6">
                        <p class="text-center">Simple, Clean, Responsive, Fast, Bootstrap</p>    
                    </div>
                    <div class="col-lg-3"></div>
                </div>
            </div>
        </div>
    </header>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="table-responsive" style="margin-top:10px;" id="results">
                        <!--Table jQuery tampil disini-->
                    </div>                        
                </div>
            </div>
        </div>
    </section>

    <!--form modal disini-->
    <div class="modal fade" id="modal-id">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title">Form</h4>
                </div>
                <div class="modal-body">
                    <form action="" method="" role="form" id="enterrr">
                        <div class="form-group">
                            <label>Id Barang</label>
                            <input class="form-control" name="fmid" placeholder="id brg" id="fmid" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Nama Barang</label>
                            <input class="form-control" name="fmnama" placeholder="nama brg" id="fmnama" type="text"/>
                        </div>
                        <div class="form-group">
                            <label>Jenis Barang</label>
                            <input class="form-control" name="fmjenis" placeholder="jenis brg" id="fmjenis" type="text" />
                        </div>
                        <div class="form-group">
                            <label>Jumlah</label>
                            <input class="form-control" name="fmjumlah" placeholder="jumlah" id="fmjumlah" type="number" />
                        </div>
                        <div class="form-group">
                            <label>Harga Beli</label>
                            <input class="form-control" name="fmhbeli" placeholder="harga beli" id="fmhbeli" type="number" />
                        </div>
                        <div class="form-group">
                            <label>Harga Jual</label>
                            <input class="form-control" name="fmhjual" placeholder="harga jual" id="fmhjual" type="number" />
                        </div>      
                </div>
                <div class="modal-footer">
                        <button class="btn btn-default" id="clear" onClick="cleardata();" data-dismiss="modal">Close</button>                    
                        <button class="btn btn-success" id="save" onClick="simpan();" data-dismiss="modal">Simpan</button>
                        <button class="btn btn-primary" id="add" onClick="tambah();" data-dismiss="modal">Tambah</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

    <!--Alert Modal-->
    <div id="alert" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="abc">Are you sure?</h4>
            </div>
            <div class="modal-footer">
                <button type="button" id="ya" class="btn btn-primary" data-dismiss="modal">Yes</button>
                <button type="button" id="tidak" class="btn btn-default" data-dismiss="modal">No</button>
            </div>
        </div>
      </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                   <p>Built and Design by Asrul Hanafi</p>                              
                </div>   
                <div class="col-md-6" align="right">
                   <p>Copyright &#174; A-Design</p>                              
                </div>                           
            </div>            
        </div>
    </footer>
    <!-- jQuery -->
    <script src="js/jquery-1.11.0.js"></script>
    <!-- Awal -->
    <script src="js/jquery-crud.js"></script>
    <!-- Bootstrap JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    </body>
</html>