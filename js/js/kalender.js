<!--
  var hariH  = new Array(7);
  hariH[1]   = "Minggu";
  hariH[2]   = "Senin";
  hariH[3]   = "Selasa";
  hariH[4]   = "Rabu";
  hariH[5]   = "Kamis";
  hariH[6]   = "Jum'at";
  hariH[7]   = "Sabtu";
  var bulanB = new Array(12);
  bulanB[1]  = "Januari";
  bulanB[2]  = "Februari";
  bulanB[3]  = "Maret";
  bulanB[4]  = "April";
  bulanB[5]  = "Mei";
  bulanB[6]  = "Juni";
  bulanB[7]  = "Juli";
  bulanB[8]  = "Agustus";
  bulanB[9]  = "September";
  bulanB[10] = "Oktober";
  bulanB[11] = "November";
  bulanB[12] = "Desember";
  var hariini = new Date();
  var hari    = hariH[hariini.getDay() + 1];
  var bulan   = bulanB[hariini.getMonth() + 1];
  var tanggal = hariini.getDate();
  var tahun   = (hariini.getYear()+1900);
  var detik   = hariini.getSeconds()
  var menit   = hariini.getMinutes();
  var jam     = hariini.getHours();
        
  function showtip(model, delay, text)
  {
    if (window.document.all&&window.document.readyState=="complete")
    {
      window.document.all.tooltip.innerHTML='<marquee class=marque behavior='+model+' scrollamount='+delay+' scrolldelay=25>'+text+'</marquee>'
      if(event.clientX > screen.width-200)
        window.document.all.tooltip.style.pixelLeft=event.clientX+document.body.scrollLeft-(window.document.all.tooltip.style.pixelWidth+10)
      else
        window.document.all.tooltip.style.pixelLeft=event.clientX+document.body.scrollLeft+10
      window.document.all.tooltip.style.pixelTop=event.clientY+document.body.scrollTop+10
      window.document.all.tooltip.style.visibility="visible"
    }
  }
  function hidetip()
  {
    window.document.all.tooltip.style.visibility="hidden"
  }
  document.write ("<div id=tooltip style='position:absolute; visibility:hidden; clip:rect(0 150 50 0); width:150px;'></div>")
//-->