				</div>
			</div>
		</div>
	</div>
	<script src="<?= base_url(); ?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>/assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
	<script src="<?= base_url(); ?>/assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url(); ?>/assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
	<script src="<?= base_url(); ?>/assets/dist/js/sb-admin-2.js"></script>
	<script type="text/javascript" src="<?= base_url(); ?>/assets/tinymce/tinymce.min.js"></script>
	<script>
	$(document).ready(function() {
		$('#dataTables-example,.dttable').DataTable({
				responsive: true
		});
tinymce.init({
		selector:".textarea",
	//	width: 500,
		height: 150,
		plugins: [
		 "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
		 "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
		 "save table contextmenu directionality emoticons template paste textcolor"
   ],
   content_css: "css/content.css",
   toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | print preview media fullpage | forecolor backcolor emoticons", 
   style_formats: [
		{title: 'Bold text', inline: 'b'},
		{title: 'Red text', inline: 'span', styles: {color: '#ff0000'}},
		{title: 'Red header', block: 'h1', styles: {color: '#ff0000'}},
		{title: 'Example 1', inline: 'span', classes: 'example1'},
		{title: 'Example 2', inline: 'span', classes: 'example2'},
		{title: 'Table styles'},
		{title: 'Table row 1', selector: 'tr', classes: 'tablerow1'}
	]

		})


	});
	</script>

</body>
</html>
