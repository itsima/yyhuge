<?php if (!defined('THINK_PATH')) exit();?><style>
.IndexImage{
   display:none;
   }
</style>   
   <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo C("SITE_INFO.name");?></title>
<link rel="stylesheet" href="/yy/Public/cssAdmin/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/yy/Public/cssAdmin/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/yy/Public/cssAdmin/invalid.css" type="text/css" media="screen" />	

<script type="text/javascript" src="/yy/Public/jsAdmin/jquery-1.7.2.min.js"></script>
<script type="text/javascript" src="/yy/Public/jsAdmin/simpla.jquery.configuration.js"></script>
<script type="text/javascript" src="/yy/Public/jsAdmin/jquery.wysiwyg.js"></script>   
<link rel="stylesheet" href="/yy/Public/jsAdmin/ui/redmond/jquery-ui-1.8.6.css">        
      <script type="text/javascript" src="/yy/Public/jsAdmin/ui/jquery-ui-1.8.6.min.js"></script>

      <script src="/yy/Public/jsAdmin/scripts/utils.js" type="text/javascript"></script>
        
    <!-- ckeditor  -->        
     <link rel="stylesheet" href="/yy/Public/kindeditor/themes/default/default.css" />
     <script charset="utf-8" src="/yy/Public/kindeditor/kindeditor.js"></script>
        
	  <script>
          KindEditor.ready(function(K) {
              var editor = K.create('textarea.HTMLeditor', {
                          allowFileManager : true,
                          width : 800,
                          height : 400,
						  afterBlur: function(){this.sync();}
				}); 
          });	
      </script>
       
      <script type="text/javascript" src="/yy/Public/jsAdmin/fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
      <script type="text/javascript" src="/yy/Public/jsAdmin/fancybox/jquery.fancybox-1.3.4.pack.js"></script>      
      <link rel="stylesheet" type="text/css" href="/yy/Public/jsAdmin/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
      <script>
	  $(function(){
		 $("a.fancyBox").fancybox(); 
	  })	 
	  </script>        
     <script>
        $(function() {
          $( "#datepicker" ).datepicker({dateFormat: "yy-mm-dd"});	
		  $( "#sub_tabs" ).tabs();  
        });	
		function delImages()
		{
			  $("#image").html('');
			  $("input[name=del_iamge]").val("true");			  
		} 
		$(function(){
			  $('.content-box .content-box-content div.tab-content').hide(); // Hide the content divs
			  $('ul.content-box-tabs li a.default-tab').addClass('current'); // Add the class "current" to the default tab
			  $('.content-box-content div.default-tab').show(); // Show the div with class "default-tab"
			  
			  $('.content-box ul.content-box-tabs li a').click( // When a tab is clicked...
				  function() { 				  
				  
					 var insertId = $(this).attr("href").substring($(this).attr("href").length-1);
					 var url = $(".insert a").attr("href").replace(/room\/\d/,"room/"+insertId);
					 $(".insert a").attr("href", url);				
					  
					  $(this).parent().siblings().find("a").removeClass('current'); // Remove "current" class from all tabs
					  $(this).addClass('current'); // Add class "current" to clicked tab
					  var currentTab = $(this).attr('href'); // Set variable "currentTab" to the value of href of clicked tab
					  $(currentTab).siblings().hide(); // Hide all content divs
					  $(currentTab).show(); // Show the content div with the id equal to the id of clicked tab
					  return false; 
				  }
			  );
		});
	</script>  

	</head>
  
	<body>
    
    

    

    
    <div id="body-wrapper" > <!-- Wrapper for the radial gradient background -->		

        <!--left start-->
		
        <div id="sidebar"   >
 <div id="sidebar-wrapper" style="position:relative; height:100%"> 		  
    <!-- Sidebar Profile links -->
    <div id="profile-links" style="margin-top:110px; font-size:12px;">
        Hello,<a href="#" onclick="return false;" title="Edit your profile"><?php echo $_SESSION['admin']; ?></a>			
        <br />
        <br />
        <a href="/yy/index.php" target="_blank" title="View the Site">View the Site</a> | 
        <a href="<?php echo U('Login/LoginOut');?>" title="Sign Out">Sign Out</a>
     </div>	
<ul id="main-nav">
<li id="li_Menu_<?php echo ($i); ?>">    
	    <a href="#" class="nav-top-item <?php if(in_array(MODULE_NAME,$value)) echo 'current'; ?>">Menu</a>
    	<ul>
    	<?php echo W('Menu/menu');?>        
		</ul> 
</li>
<li id="li_Menu_<?php echo ($i); ?>"> 
    	<?php echo W('Menu/menuOne');?>
    	<ul>
    	<?php echo W('Menu/menu2');?>	        
		</ul> 
</li>
</ul> 				
  </div>
</div> 
        <!--left end-->
        
        
        <!-- End #sidebar -->			
		<div id="main-content"> <!-- Main Content Section with everything -->
        <div  id="header_logo"><?php echo C("TITLE");?></div>	 		
			
			<!-- Page Head -->
			<div style="float:left;">
              <h2>Add Products</h2>
            </div>
			<div class="clear"></div> <!-- End .clear -->           
                <!-- Insert -->
                <form action="<?php echo U('Products/addProductsAction');?>" name="editForm" method="post" enctype="multipart/form-data" >	
                <div class="content-box">				
                    <div class="content-box-header">  
                                     
                          <ul class="content-box-tabs">			
                                      
                              <li><a href="#tab1" id="menu1" class="default-tab current" style="text-transform:capitalize">General</a></li>	 
                              <li><a href="#tab2" id="menu2" style="text-transform:capitalize">Data</a></li>	       
                                                          
                          </ul>	 
                           
                         <span class="insert" style=" float:right; line-height:40px; font-size:14px; font-weight:bold;"><a href="<?php echo U('index');?>">List </a>&nbsp; &nbsp; </span>                        	
                      <div class="clear"></div>					
                    </div>
                    
                   
                    <div class="content-box-content">	                     
                       
                        <div class="tab-content default-tab" id="tab1"> <!-- This is the target div. id must match the href of this div's tab -->	                            
                             
                             <div id="sub_tabs">                               
                               	  <ul>
                                    <?php if(is_array($lang)): $k = 0; $__LIST__ = $lang;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><li><a href="#tabs2-<?php echo ($vo["value"]); ?>"><img src="/yy/Public/imagesAdmin/<?php echo ($vo["value"]); ?>_icon.gif"> <?php echo ($vo["txt"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>   
                                 </ul>
                           
                               
                                <?php if(is_array($langList)): $k = 0; $__LIST__ = $langList;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($k % 2 );++$k;?><div class="tabs" id="tabs2-<?php echo ($vo); ?>">                                    
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="editContent">
                                      <tr>
                                        <td class="fieldText">Name:</td><td><input class="text-input small-input" value="<?php echo ($titleArr[$k]); ?>" style="width:590px!important"  type="text" id="news_title_<?php echo ($k); ?>" name="products_name_<?php echo ($k); ?>" /></td>
                                      </tr>
                                      <tr>
                                        <td class="fieldText">English Name:</td><td><input class="text-input small-input" value="<?php echo ($titleArr[$k]); ?>" style="width:590px!important"  type="text" id="news_title_<?php echo ($k); ?>" name="products_name_en_<?php echo ($k); ?>" /></td>
                                      </tr>
                                      <tr>
                                        <td  class="fieldText" style="vertical-align:top;">Description:</td><td> <textarea style="height:300px;width:590px!important" class="page_description HTMLeditor" name="products_description_<?php echo ($k); ?>"></textarea></td>
                                      </tr>
                                      <!--  <tr>  
                                        <td  class="fieldText" style="vertical-align:top;">Feature :</td><td> <textarea style="height:300px;width:590px!important" class="page_description HTMLeditor" name="products_feature_<?php echo ($k); ?>"></textarea></td>
                                      </tr>
                                      <tr>  
                                        <td  class="fieldText" style="vertical-align:top;">Use:</td><td> <textarea style="height:300px;width:590px!important" class="page_description HTMLeditor" name="products_use_<?php echo ($k); ?>"></textarea></td>
                                      </tr>-->
                                    </table>    
                                    </div><?php endforeach; endif; else: echo "" ;endif; ?>   
                              </div> 
                           </div>  
                             
                                          
                       <!-- End #tab1 --> 
                       <div class="tab-content" id="tab2">
                       <p>
                          <label>Category:&nbsp;
                          <select name="cateid" class="cateList">
	                          <?php if(is_array($cateList)): foreach($cateList as $key=>$v): ?><option value=<?php echo ($v["categories_id"]); ?>><?php echo ($v["categories_name"]); ?></option><?php endforeach; endif; ?>
                          </select>
                          <script>
						  //控制产品物性,两张图片
                          $(function(){
							$(".cateList").change(function(){
								
							    var values=$(this).val();
								var IndexImage=$("#IndexImage");
								if(values==52){
									
									IndexImage.removeClass("IndexImage");
									
								}else
								{
									IndexImage.addClass("IndexImage");
								}
							});
							
							
							var rs=$(".cateList").select();
							var IndexImage=$("#IndexImage");
							if(rs.val()==52){
								IndexImage.removeClass("IndexImage");
							  }
							
						  });
                          </script>
                          </label>                                                                 
                        </p>                        
                        <p>
                          <label>Image:&nbsp;<input type="file" id="news_image" name="products_img[]"></label>                              
                          <?php echo ($imageShow); ?>                                      
                        </p>
                        <!--IndexImage-->
                       <div class="IndexImage" id="IndexImage">
                        <p>
                          <label>Index Image:&nbsp;<input type="file" id="news_image" name="products_img[]"></label>                              
                          <?php echo ($imageShow); ?>                                      
                        </p>
                       </div>
                       <!--IndexImage end-->
                        <p>
                              <label>Status:
                            	  <input type="checkbox" style="vertical-align:middle" name="products_status"  value="1"/>
                              </label>                                                                 
                        </p>
                        <p>
                          <label>Home Sort Order:&nbsp;</label>  
                          <input class="text-input small-input"  type="text" name="sort_order_index"  value="<?php echo ($listInfo["sort_order"]); ?>" />                                                                
                        </p> 
                        <p>
                          <label>Sort Order:&nbsp;</label>  
                          <input class="text-input small-input"  type="text" name="sort_order"  value="<?php echo ($listInfo["sort_order"]); ?>" />                                                                
                        </p>
                       </div>                         
                    </div>
                       
                
                </div>                 
                <!--End Insert -->
                 <div class="clear"></div>
                            <input class="button" style="text-transform:capitalize" type="submit" name="BtnSave"  value="save" />&nbsp;&nbsp;
                            <input class="button" type="button" name="back" onClick="window.location.href='<?php echo U('index');?>'"  value="Back" />    
			</form>
			
			<div class="clear"></div>
			
			
			<!-- Start Notifications -->
			
			

			
			<!-- End Notifications -->
			
            <div id="footer">
				<small> <!-- Remove this notice or replace it with whatever you want -->
						&#169; Copyright 2013
				</small>
			</div>
			
			
			
			<!-- End #footer -->
			
		</div> <!-- End #main-content -->
		
	</div>
	
	
	
	</body>
<!-- Download From www.exet.tk-->
</html>