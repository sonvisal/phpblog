<!DOCTYPE html>
<html>
<head>
	<title>post page</title>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css"/>
	<script type="text/javascript" src="asset/js/bootstrap.js"></script>
	<script src="ckeditor.js"></script>
	<link href="../simples/sample.css" rel="stylesheet">
	<style>
		.cke_focused,
		.cke_editable.cke_focused
		{
			outline: 3px dotted blue !important;
			*border: 3px dotted blue !important;	/* For IE7 */
		}
	</style>
	<script>

		CKEDITOR.on( 'instanceReady', function( evt ) {
			var editor = evt.editor;
			editor.setData( 'This editor has it\'s tabIndex set to <strong>' + editor.tabIndex + '</strong>' );

			// Apply focus class name.
			editor.on( 'focus', function() {
				editor.container.addClass( 'cke_focused' );
			});
			editor.on( 'blur', function() {
				editor.container.removeClass( 'cke_focused' );
			});

			// Put startup focus on the first editor in tab order.
			if ( editor.tabIndex == 1 )
				editor.focus();
		});
	</script>
</head>
<body>
	<div class="container">
	 <form role="form">
	    <div class="form-group">
	      <div class="col-xs-3">
	        <label for="ex1">Title</label>
	        <input class="form-control" id="ex1" type="text">
	      </div>
	      <div class="col-xs-3">
			 <div class="col-xs-4">
		        <label for="ex2">Category</label><br/>
		          <select class="btn btn-info">
	                <option value="Working on">Working on</option>
	                <option value="About me"> About me</option>
	                <option value="New">New</option>
	              </select>
	      </div>
	      </div>
	    </div>
  </form>

	</div><br/>
	<!-- div for text editor php -->
  	<div class="container" >
  		<p>
			<textarea class="ckeditor" cols="80" id="editor3" rows="10" tabindex="3"></textarea>
		</p>
  	</div>
  <!-- end text editor  -->
</body>
</html>