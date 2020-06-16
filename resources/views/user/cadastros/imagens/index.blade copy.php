
<!DOCTYPE html>
<html>
	<head>
		<script async='async' src='//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js'></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
			google_ad_client: "ca-pub-4529508631166774",
			enable_page_level_ads: true
		  });
		</script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>How to Upload a File using Dropzone.js with PHP</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>        
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.css" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.5.1/dropzone.js"></script>	
		
		<style>
		    /* Remove the navbar's default margin-bottom and rounded borders */ 
		    .navbar {
		      margin-bottom: 0;
		      border-radius: 0;
		    }
		    
		    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
		    .row.content {height: 450px}
		    
		    /* Set gray background color and 100% height */
		    .sidenav {
		      padding-top: 20px;
		      background-color: #f1f1f1;
		      height: 100%;
		    }
		    
		    /* Set black background color, white text and some padding */
		    footer {
		      background-color: #555;
		      color: white;
		      padding: 15px;
		    }
		    
		    /* On small screens, set height to 'auto' for sidenav and grid */
		    @media screen and (max-width: 767px) {
		      .sidenav {
		        height: auto;
		        padding: 15px;
		      }
		      .row.content {height:auto;} 
		    }
	  	</style>
	</head>
	<body>
		<nav class="navbar navbar-inverse">
		  	<div class="container-fluid">
		    	<div class="navbar-header">
		      		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>
		        	<span class="icon-bar"></span>                        
		      		</button>
		      		<a class="navbar-brand" href="http://demo.webslesson.info/">Webslesson Demo</a>
		    	</div>
		    	<div class="collapse navbar-collapse" id="myNavbar">
			      	<ul class="nav navbar-nav">
				        <li class="active"><a href="http://demo.webslesson.info/">Home</a></li>
				        <li class="dropdown">
				        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tutorial
					        <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					          	<li><a href='https://www.webslesson.info/search/label/php'>PHP</a></li>
								<li><a href='https://www.webslesson.info/search/label/mysql'>MySql</a></li>
								<li><a href='https://www.webslesson.info/search/label/JQuery'>JQuery</a></li>
								<li><a href='https://www.webslesson.info/search/label/Ajax'>Ajax</a></li>
								<li><a href='https://www.webslesson.info/search/label/Codeigniter'>Codeigniter</a></li>
								<li><a href='https://www.webslesson.info/search/label/AngularJS'>AngularJS</a></li>
								<li><a href='https://www.webslesson.info/search/label/laravel'>Laravel</a></li>
					        </ul>
				        </li>
				        <li class="dropdown">
				        	<a class="dropdown-toggle" data-toggle="dropdown" href="#">Tools
					        <span class="caret"></span></a>
					        <ul class="dropdown-menu">
					          	<li><a href='https://www.webslesson.info/p/online-slug-generator-tool.html' title='Online Slug Generator'>Online Slug Generator</a></li>
								<li><a href='https://www.webslesson.info/p/online-code-formatter.html' title='Online Source Code Formatter'>Online Source Code Formatter</a></li>
								<li><a href='https://www.webslesson.info/p/online-html-entities-encoder-and-decoder.html' title='HTML Encoder / Decoder'>HTML Encoder / Decoder</a></li>
								<li><a href='https://www.webslesson.info/2018/03/count-character-count-words-online-convert-case.html' title='Convert Case & Count Character'>Convert Case & Count Character</a></li>
					        </ul>
				        </li>
				        <li><a href='https://www.webslesson.info/p/about-us.html'>About Us</a></li>
						<li><a href='https://www.webslesson.info/p/write-for-us-publish-guest-post.html'>Write for Us</a></li>
						<li><a href='https://www.webslesson.info/p/privacy-policy.html'>Privacy Policy</a></li>
						<li><a href='https://www.webslesson.info/p/terms-conditions.html'>Terms and Condition</a></li>
						<li><a href='https://www.webslesson.info/p/contact-us.html'>Contact Me</a></li>
			      	</ul>
		    	</div>
		  	</div>
		</nav>

		<div class="container-fluid text-center">    
  			<div class="row content">
  				<div class="col-sm-2">
  					<div class="well" style="margin-top:20px;">
  						<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						<!-- webslesson_sidebarrightsec_AdSense1_1x1_as -->
						<ins class="adsbygoogle"
						     style="display:block"
						     data-ad-client="ca-pub-4529508631166774"
						     data-ad-host="ca-host-pub-1556223355139109"
						     data-ad-host-channel="L0001"
						     data-ad-slot="7056856732"
						     data-ad-format="auto"
						     data-full-width-responsive="true"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
  					</div>
  				</div>
  				<div class="col-sm-8 text-left">
  					<br />
					<h3 align="center"><a href="https://www.webslesson.info/2018/07/dropzonejs-with-php-for-upload-file.html">How to Upload a File using Dropzone.js with PHP</a></h3>
					<br />
					
					<form action="upload.php" class="dropzone" id="dropzoneForm">
					
						
					</form>
					<br />
					<br />
					<div align="center">
						<button type="button" class="btn btn-info" id="submit-all">Upload</button>
					</div>
					<br />
					<br />
					<div id="preview"></div>
					<br />
					<br />
  				</div>
  				<div class="col-sm-2">
  					
  				</div>
  			</div>
  		</div>
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-87739877-1', 'auto');
		  ga('send', 'pageview');

		</script>
	</body>
</html>

<script>
/*$(document).ready(function(){	
	Dropzone.options.dropzoneForm = {
		maxFilesize: 5,
		addRemoveLinks: true,
		dictResponseError: 'Server not Configured',
		acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
		init: function() {
			thisDropzone = this;
			thisDropzone.options.addRemoveLinks = true;
			thisDropzone.options.dictRemoveFile = "Delete";
			$.get('upload.php', function(data) {
				$.each(data, function(key,value){
					 
					var mockFile = { name: value.name, size: value.size };
					 
					thisDropzone.options.addedfile.call(thisDropzone, mockFile);
	 
					thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "uploads/"+value.name);
					 
				});
				 
			});
			
		}
	};
});*/
/*$(function(){
  Dropzone.options.dropzoneForm = {
    maxFilesize: 5,
    addRemoveLinks: true,
    dictResponseError: 'Server not Configured',
    acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
    init:function(){
      var self = this;
      // config
      self.options.addRemoveLinks = true;
      self.options.dictRemoveFile = "Delete";
      //New file added
      self.on("addedfile", function (file) {
        console.log('new file added ', file);
      });
      // Send file starts
      self.on("sending", function (file) {
        console.log('upload started', file);
        $('.meter').show();
      });
      
      // File upload Progress
      self.on("totaluploadprogress", function (progress) {
        console.log("progress ", progress);
        $('.roller').width(progress + '%');
      });

      self.on("queuecomplete", function (progress) {
        $('.meter').delay(3000).slideUp(999);
      });
      
      // On removing file
      self.on("removedfile", function (file) {
        console.log(file);
      });
    }
  };
})*/



$(document).ready(function(){
	
	Dropzone.options.dropzoneForm = {

		autoProcessQueue: false,
		acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
		init: function() {
			var submitButton = document.querySelector("#submit-all");
			myDropzone = this;

			submitButton.addEventListener("click", function(){
				myDropzone.processQueue();
			});

			// Execute when file uploads are complete
			this.on("complete", function() {
			  // If all files have been uploaded
				if (this.getQueuedFiles().length == 0 && this.getUploadingFiles().length == 0) 
				{
					var _this = this;
					// Remove all files
					_this.removeAllFiles();
				}
			});

		}
	};
	
	/*function list_image()
	{
		$.ajax({
			url:"upload.php",
			//method:"POST",
			success:function(data)
			{
				console.log(data);
			}
		});
	}*/
	
	
	/*$(document).on('click', '.remove_image', function(){
		var name = $(this).attr('id');
		$.ajax({
			url: 'upload.php',
			method: 'POST',			
			data: {name: name},
			success: function(data){
				list_image();
			}
		});
	});*/
	
	/*Dropzone.autoDiscover = false;
	$(".dropzone").dropzone({
		addRemoveLinks: true,
		acceptedFiles: ".png,.jpg,.gif,.bmp,.jpeg",
		thumbnailWidth:'200',
		thumbnailHeight:'200',
		init: function() {
			thisDropzone = this;
			$.ajax({
				url:"upload.php",
				type:'POST',
				success:function(data)
				{
					$.each(data, function(key,value){
					 
						var mockFile = { name: value.name, size: value.size };
						 
						thisDropzone.options.addedfile.call(thisDropzone, mockFile);
		 
						thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "upload/"+value.name);
						 
					});
				}
			});	
		},
		/*removedfile: function(file)
		{
			thisDropzone = this;
			var name = file.name;
			$.ajax({
				type: 'POST',
				url: 'upload.php',
				data: {name: name},
				sucess: function(data){*/
					/*$.each(data, function(key,value){
						var mockFile = { name: value.name, size: value.size };
						var myDropzone = new Dropzone("#dropzoneForm");
						myDropzone.options.addedfile.call(myDropzone, mockFile);
	 
						myDropzone.options.thumbnail.call(myDropzone, mockFile, "upload/"+value.name);
					});*/
				/*}
			});
		}
	});*/
	
	
});
</script>