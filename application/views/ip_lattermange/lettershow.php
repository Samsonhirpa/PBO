<div class="content-wrapper">

<html>

  <head>

    <meta charset="utf-8" /> <!-- first element so that the encoding is applied to the title etc. -->
    <title>OSTICA</title>
    <link rel="stylesheet" href="letter.css" />
  </head>

  <body>
<div id="divone">
    <header> 
      <address class="return-address">

        
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/> <p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <!-- ቁጥ :<?php echo $osticaletters->refno;?>  <br/> -->
        &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <!-- ቀን :<?php echo $osticaletters->date;?>  --> </p>                                        
        <br/>
       <h4> ለኢትዮ ትሌኮም ኢንተርፕራይዝ ዲቪዢን <br/><br/>
        አዲስ አበባ <br/></h4>
        
       
      </address>
<h4><u>ጉዳዪ፡- የወረዳ ኔት መስመር ስለመጠየቅ ይሆናል </u></h4>
      
    </header>

   
    <div class="content"> <!-- use this div only if it is required for styling -->
        <p style="text-align:justify">
        
        
     &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;ከላይ በርህሱ ለመጥቀስ እንደተሞከረዉ በኦሮምያ ክልል <?php echo $osticaletters->zname;?> ዞን <?php echo $osticaletters->wname;?> ወረዳ <?php echo $osticaletters->organization;?> የወረዳ ኔት መስመር እንዲገባላቸዉ ጠይቀዉናል፡፡
</p>
<p style="text-align:justify">

   &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;በዚሁም መሰርት ባለ <?php echo $osticaletters->band_width;?>  <?php echo $osticaletters->service_type;?>  የወረዳ ኔት መስመር በ LAN IP <?php echo $osticaletters->lanip;?>  IPID: <?php echo $osticaletters->ipid;?> እንዲገባላቸዉና የአገልግሎት ክፍያዉን የሚፈፅሙ የመ/ቤታችን ባልደረባ የሆኑት <?php echo $osticaletters->osticafinance;?> ስ.ቁ <?php echo $osticaletters->osticaphone;?> ሲሆኑ መስመሩ በሚገባበት ቦታ ላይ ያለዉን የስራ ሂደት የሚከታተሉት የአይ ሲ ቲ ባለሙያ የሆኑት <?php echo $osticaletters->site_ict;?> ስ.ቁ <?php echo $osticaletters->sitephone;?> መሆናቸዉን እንገልፃለን፡፡
          
        </p>
        <p>
        
        </p>   <p>
        
        </p>   <p>
        
        </p>
        <p>ከሰላምታ ጋር</p>
        
      </div>

      <p class="adios">
        
        <p>
        
        </p>
          <p>
        
        </p>
          <p>
        
      
        
        </p>
        <br class="greets" />
            <u> ግልባጭ</u><br/>
         &nbsp; &nbsp; &nbsp;    •  ለ ም/ዋ/ ዳይሬክተር ጽ/ቤት<br/>
          &nbsp; &nbsp; &nbsp;   •  ለቴሌኮምና ፖስታ ዳይሬክቶሬት<br/>
          &nbsp; &nbsp; &nbsp;   •  ለቦተር ጦላይ ወረዳ ፐብሊክ ሰርቪስና የሰዉ ሀብት ልማት ፅ/ቤት<br/>

      </p>
      </div>
<button class="btn btn-success" onclick="myfun('divone')">print</button>
</div>
<script type="text/javascript">
	
	function mywholepage(){
		window.print();
	}
	function myfun(divone){
		var backup = document.body.innerHTML;
		var divcontent = document.getElementById('divone').innerHTML;
		document.body.innerHTML = divcontent;
		window.print();
		document.body.innerHTML = backup;
	}
</script>
  </body>

</html>