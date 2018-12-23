

<?php $this->load->view("header");?>
<?php $this->load->view("menu");?>
 <div class="wrapper"> 
    <div class="contentPane" style="border: 1px solid">
    <div class="image-row">
				<div class="image-row">
				<div class="image-set" >
				
                                        	<?php $res = $this->db->get("gallery")->result();?>
                                        	<?php foreach($res as $row):?>
					<a class="example-image-link" href="<?php echo base_url();?>AdminPanel/assets/images/<?php echo $row->image; ?>" data-lightbox="example-set" data-title="welcome."><img class="example-image" src="<?php echo base_url();?>AdminPanel/assets/images/<?php echo $row->image; ?>" alt="" style="width:218px; height:218px;padding: 10px;"/></a>
					 <?php endforeach;?>
				</div>
			</div>
			</div>
   
    </div>
    <!--Content Pane--> 
  </div>
<?php $this->load->view("footer");?>
