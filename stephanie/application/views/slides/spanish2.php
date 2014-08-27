<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>STEPHANIE</title>


  <!--[if IE 6]>
  <link rel="stylesheet" type="text/css" href="javascript/slider/themes/carbono/jquery.slider.ie6.css" />
  <![endif]-->

  
  <!--<link rel="stylesheet" href="/assets/bootstrap/bootstrap.min.css" />
  <link rel="stylesheet" href="/assets/bootstrap/bootstrap-theme.min.css" />
  <script src="/assets/bootstrap/jquery.min.js"></script>
  <script src="/assets/bootstrap/bootstrap.min.js"></script>-->
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script type="text/javascript">
        $(document).ready(function(){
             $("#myCarousel").carousel({
                 interval : 1000,
                 pause: false
             });
        });
  </script>
<style type="text/css">
h2{
    margin: 0;     
    color: #666;
    padding-top: 90px;
    font-size: 52px;
    font-family: "trebuchet ms", sans-serif;    
}
.item{
    text-align: center;
    height: 500px !important;
    width: 950px !important;
}
.carousel{
    margin-top: 20px;
}
.bs-example{
	margin: 20px;
}
</style>
  
  
<link href="/assets/css/web.css" rel="stylesheet" type="text/css">
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
</head>

<body onLoad="MM_preloadImages('/assets/imagenes/galeria2.jpg','/assets/imagenes/retratos2.jpg','/assets/imagenes/archivo2.jpg','/assets/imagenes/libro2.jpg','/assets/imagenes/contacto2.jpg')">
<div class="header">
  <div  class="logo"><img src="/assets/imagenes/logo.jpg" width="323" height="48" alt=""/>  </div>
  <div class="redessociales"><a href="https://www.facebook.com/estefania.desperies?fref=ts" target="_blank"><img src="/assets/imagenes/facebook.jpg" width="40" height="34" alt="" border="0"/></a></div>
  <div class="redessociales"><a href="http://instagram.com/stephdesperies" target="_blank"><img src="/assets/imagenes/instagram.jpg" width="40" height="34" alt="" border="0"/></a></div> 
</div>
    <div style="width: 950px; margin-left: auto; margin-right: auto;">
    
        
        
        
        
        
       
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Carousel indicators -->
            <ol class="carousel-indicators">
                <?php $i = 0; ?>
                <?php foreach($fotos as $foto) { ?>
                <li data-target="#myCarousel" data-slide-to="<?=$i?>" <?=($i==0)?"class='active'":""?>"></li>
                <?php $i++; ?>
                <?php } ?>

            </ol>   
            <!-- Carousel items -->
            <div class="carousel-inner">
                <?php $i = 0; ?>
                <?php foreach($fotos as $foto) { ?>
                <div class="<?=($i==0)?"active ":""?>item">
                    <img src="/upload/<?=$foto['foto']?>">
                </div>
                <?php $i++; ?>
                <?php } ?>
            </div>
            <!-- Carousel nav -->
            <a class="carousel-control left" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="carousel-control right" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
        </div>
       
        
        
        
        
        
    </div>
<div class="menu">
  <table width="100%" border="0" cellpadding="0" cellspacing="0">
    <tbody>
      <tr>
        <td><a href="/galeria/es" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image4','','/assets/imagenes/galeria2.jpg',1)"><img src="/assets/imagenes/galeria<?=($segmento=='galeria')?"2":"1"?>.jpg" alt="" width="154" height="35" id="Image4"></a></td>
        <td><a href="/retratos/es" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image5','','/assets/imagenes/retratos2.jpg',1)"><img src="/assets/imagenes/retratos<?=($segmento=='retratos')?"2":"1"?>.jpg" alt="" width="230" height="35" id="Image5"></a></td>
        <td><a href="/archivo/es" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image6','','/assets/imagenes/archivo2.jpg',1)"><img src="/assets/imagenes/archivo<?=($segmento=='archivo')?"2":"1"?>.jpg" alt="" width="205" height="35" id="Image6"></a></td>
        <td><a href="/libro/es" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image7','','/assets/imagenes/libro2.jpg',1)"><img src="/assets/imagenes/libro<?=($segmento=='libro')?"2":"1"?>.jpg" alt="" width="171" height="35" id="Image7"></a></td>
        <td><a href="/contacto/es" onMouseOut="MM_swapImgRestore()" onMouseOver="MM_swapImage('Image8','','/assets/imagenes/contacto2.jpg',1)"><img src="/assets/imagenes/contacto1.jpg" alt="" width="183" height="35" id="Image8"></a></td>
      </tr>
    </tbody>
  </table>
</div>
</body>
</html>
<script type="text/javascript">
        $(document).ready(function() {
            $(".carousel-example-generic").carousel();
        });
</script>