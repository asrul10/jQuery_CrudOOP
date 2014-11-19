$(document).ready(function(){     
    read();
});

function read(){
    $.get('controler/read.php', function(returnData) {
            $('#results').html(returnData);
            $('#save').attr('disabled','disabled');
            $('#add').removeAttr('disabled');
    });
}

function edit(idne,namane,jenise,jumlae,hrb,hrj){
    $('#fmid').attr('readonly','readonly'); 
    $('#fmid').val(idne);  
    $('#fmnama').val(namane); 
    $('#fmjenis').val(jenise);
    $('#fmjumlah').val(jumlae);
    $('#fmhbeli').val(hrb);
    $('#fmhjual').val(hrj);
    
    $('#save').removeAttr('disabled');
    $('#add').attr('disabled','disabled');
}

function bersih(){    
    $('#fmid').val('');  
    $('#fmnama').val(''); 
    $('#fmjenis').val('');
    $('#fmjumlah').val('');
    $('#fmhbeli').val('');
    $('#fmhjual').val('');
}

function cleardata(){
    bersih();
    $('#fmid').removeAttr('readonly');;
    $('#add').removeAttr('disabled');
    $('#save').attr('disabled','disabled');
    read();
}

function hapus( id ){
    $("#ya").click(function() {
        $.get('controler/delete.php?id='+id, function() {
            read();
        });
    });
}

function tambah(){
    var id = $('#fmid').val();  
    var nama = $('#fmnama').val(); 
    var jenis = $('#fmjenis').val();
    var jumlah = $('#fmjumlah').val();
    var hbeli = $('#fmhbeli').val();
    var hjual = $('#fmhjual').val();

    if ((id=="") || (nama=="") || (jenis=="") || (jumlah=="") || (hbeli=="") || (hjual=="")){
         var answer = confirm('Data masih ada yang kosong');
           if ( answer ){
            //do nothing   
           }
    }else{
        $.get('controler/insert.php?id='+id+'&nama='+nama+'&jenis='+jenis+'&jumlah='+jumlah+'&hbeli='+hbeli+'&hjual='+hjual, function(){
            bersih();
            read();
        });
    }
}


function simpan(){
    var id = $('#fmid').val();  
    var nama = $('#fmnama').val(); 
    var jenis = $('#fmjenis').val();
    var jumlah = $('#fmjumlah').val();
    var hbeli = $('#fmhbeli').val();
    var hjual = $('#fmhjual').val();
    

    if ((nama=="") || (jenis=="") || (jumlah=="") || (hbeli=="") || (hjual=="")){
         var answer = confirm('Data masih ada yang kosong');
         if(answer){
            
         }
    }else{
        $.get('controler/update.php?id='+id+'&nama='+nama+'&jenis='+jenis+'&jumlah='+jumlah+'&hbeli='+hbeli+'&hjual='+hjual, function(){
            bersih();
            read();
        });
    }
}