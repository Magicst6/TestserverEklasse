<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="shortcut icon" type="image/ico" href="http://www.datatables.net/favicon.ico">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, user-scalable=no">
	<title>DataTables example - Ajax data source (arrays)</title>
	<link rel="stylesheet" type="text/css" href="../../media/css/jquery.dataTables.css">
	<link rel="stylesheet" type="text/css" href="../resources/syntax/shCore.css">
	<link rel="stylesheet" type="text/css" href="../resources/demo.css">
	<style type="text/css" class="init">
	
	</style>
	<script type="text/javascript" language="javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script type="text/javascript" language="javascript" src="../../media/js/jquery.dataTables.js"></script>
	<script type="text/javascript" language="javascript" src="../resources/syntax/shCore.js"></script>
	<script type="text/javascript" language="javascript" src="../resources/demo.js"></script>
	<script type="text/javascript" language="javascript" class="init">
	
$(document).ready(function() {
	$('#example').DataTable( {
		"ajax": "data/arrays.txt"
	} );
} );

	</script>
</head>
<body class="dt-example">
	<div class="container">
		<section>
			<h1>DataTables example <span>Ajax data source (arrays)</span></h1>
			<div class="info">
				<p>DataTables has the ability to read data from virtually any JSON data source that can be obtained by Ajax. This can be done, in its most simple form, by setting
				the <a href="//datatables.net/reference/option/ajax"><code class="option" title="DataTables initialisation option">ajax</code></a> option to the address of the
				JSON data source.</p>
				<p>The <a href="//datatables.net/reference/option/ajax"><code class="option" title="DataTables initialisation option">ajax</code></a> option also allows for more
				advanced configuration such as altering how the Ajax request is made. See the <a href="//datatables.net/reference/option/ajax"><code class="option" title=
				"DataTables initialisation option">ajax</code></a> documentation or the other Ajax examples for DataTables for further information.</p>
				<p>By default DataTables will assume that an array data source is to be used and will read the information to be displayed in each column from the row's array
				using the column index, making working with arrays very simple (note that this can be changed, or objects may use the <a href=
				"//datatables.net/reference/option/columns.data"><code class="option" title="DataTables initialisation option">columns.data</code></a> option, shown in other
				examples).</p>
				<p>The example below shows DataTables loading data for a table from arrays as the data source, where the structure of the row's data source in this example is:</p>
				<pre><code class="multiline">[
	"Tiger Nixon",
	"System Architect",
	"Edinburgh",
	"5421",
	"2011/04/25",
	"$3,120"
]
</code></pre>
				<p>For more details on loading a DataTable with Ajax data, please refer to the <a href="https://datatables.net/manual/ajax">Ajax section of the manual</a>.</p>
			</div>
			<div class="demo-html"></div>
			<table id="example" class="display" style="width:100%">
				<thead>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Extn.</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</thead>
				<tfoot>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Extn.</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</tfoot>
			</table>
			<ul class="tabs">
				<li class="active">Javascript</li>
				<li>HTML</li>
				<li>CSS</li>
				<li>Ajax</li>
				<li>Server-side script</li>
			</ul>
			<div class="tabs">
				<div class="js">
					<p>The Javascript shown below is used to initialise the table shown in this example:</p><code class="multiline language-js">$(document).ready(function() {
	$('#example').DataTable( {
		&quot;ajax&quot;: &quot;data/arrays.txt&quot;
	} );
} );</code>
					<p>In addition to the above code, the following Javascript library files are loaded for use in this example:</p>
					<ul>
						<li>
							<a href="https://code.jquery.com/jquery-3.3.1.js">https://code.jquery.com/jquery-3.3.1.js</a>
						</li>
						<li>
							<a href="../../media/js/jquery.dataTables.js">../../media/js/jquery.dataTables.js</a>
						</li>
					</ul>
				</div>
				<div class="table">
					<p>The HTML shown below is the raw HTML table element, before it has been enhanced by DataTables:</p>
				</div>
				<div class="css">
					<div>
						<p>This example uses a little bit of additional CSS beyond what is loaded from the library files (below), in order to correctly display the table. The
						additional CSS used is shown below:</p><code class="multiline language-css"></code>
					</div>
					<p>The following CSS library files are loaded for use in this example to provide the styling of the table:</p>
					<ul>
						<li>
							<a href="../../media/css/jquery.dataTables.css">../../media/css/jquery.dataTables.css</a>
						</li>
					</ul>
				</div>
				<div class="ajax">
					<p>This table loads data by Ajax. The latest data that has been loaded is shown below. This data will update automatically as any additional data is
					loaded.</p>
				</div>
				<div class="php">
					<p>The script used to perform the server-side processing for this table is shown below. Please note that this is just an example script using PHP. Server-side
					processing scripts can be written in any language, using <a href="//datatables.net/manual/server-side">the protocol described in the DataTables
					documentation</a>.</p>
				</div>
			</div>
		</section>
	</div>
	<section>
		<div class="footer">
			<div class="gradient"></div>
			<div class="liner">
				<h2>Other examples</h2>
				<div class="toc">
					<div class="toc-group">
						<h3><a href="../basic_init/index.html">Basic initialisation</a></h3>
						<ul class="toc">
							<li>
								<a href="../basic_init/zero_configuration.html">Zero configuration</a>
							</li>
							<li>
								<a href="../basic_init/filter_only.html">Feature enable / disable</a>
							</li>
							<li>
								<a href="../basic_init/table_sorting.html">Default ordering (sorting)</a>
							</li>
							<li>
								<a href="../basic_init/multi_col_sort.html">Multi-column ordering</a>
							</li>
							<li>
								<a href="../basic_init/multiple_tables.html">Multiple tables</a>
							</li>
							<li>
								<a href="../basic_init/hidden_columns.html">Hidden columns</a>
							</li>
							<li>
								<a href="../basic_init/complex_header.html">Complex headers (rowspan and colspan)</a>
							</li>
							<li>
								<a href="../basic_init/dom.html">DOM positioning</a>
							</li>
							<li>
								<a href="../basic_init/flexible_width.html">Flexible table width</a>
							</li>
							<li>
								<a href="../basic_init/state_save.html">State saving</a>
							</li>
							<li>
								<a href="../basic_init/alt_pagination.html">Alternative pagination</a>
							</li>
							<li>
								<a href="../basic_init/scroll_y.html">Scroll - vertical</a>
							</li>
							<li>
								<a href="../basic_init/scroll_y_dynamic.html">Scroll - vertical, dynamic height</a>
							</li>
							<li>
								<a href="../basic_init/scroll_x.html">Scroll - horizontal</a>
							</li>
							<li>
								<a href="../basic_init/scroll_xy.html">Scroll - horizontal and vertical</a>
							</li>
							<li>
								<a href="../basic_init/comma-decimal.html">Language - Comma decimal place</a>
							</li>
							<li>
								<a href="../basic_init/language.html">Language options</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../advanced_init/index.html">Advanced initialisation</a></h3>
						<ul class="toc">
							<li>
								<a href="../advanced_init/events_live.html">DOM / jQuery events</a>
							</li>
							<li>
								<a href="../advanced_init/dt_events.html">DataTables events</a>
							</li>
							<li>
								<a href="../advanced_init/column_render.html">Column rendering</a>
							</li>
							<li>
								<a href="../advanced_init/length_menu.html">Page length options</a>
							</li>
							<li>
								<a href="../advanced_init/dom_multiple_elements.html">Multiple table control elements</a>
							</li>
							<li>
								<a href="../advanced_init/complex_header.html">Complex headers with column visibility</a>
							</li>
							<li>
								<a href="../advanced_init/object_dom_read.html">Read HTML to data objects</a>
							</li>
							<li>
								<a href="../advanced_init/html5-data-options.html">HTML5 data-* attributes - table options</a>
							</li>
							<li>
								<a href="../advanced_init/html5-data-attributes.html">HTML5 data-* attributes - cell data</a>
							</li>
							<li>
								<a href="../advanced_init/language_file.html">Language file</a>
							</li>
							<li>
								<a href="../advanced_init/defaults.html">Setting defaults</a>
							</li>
							<li>
								<a href="../advanced_init/row_callback.html">Row created callback</a>
							</li>
							<li>
								<a href="../advanced_init/row_grouping.html">Row grouping</a>
							</li>
							<li>
								<a href="../advanced_init/footer_callback.html">Footer callback</a>
							</li>
							<li>
								<a href="../advanced_init/dom_toolbar.html">Custom toolbar elements</a>
							</li>
							<li>
								<a href="../advanced_init/sort_direction_control.html">Order direction sequence control</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../styling/index.html">Styling</a></h3>
						<ul class="toc">
							<li>
								<a href="../styling/display.html">Base style</a>
							</li>
							<li>
								<a href="../styling/no-classes.html">Base style - no styling classes</a>
							</li>
							<li>
								<a href="../styling/cell-border.html">Base style - cell borders</a>
							</li>
							<li>
								<a href="../styling/compact.html">Base style - compact</a>
							</li>
							<li>
								<a href="../styling/hover.html">Base style - hover</a>
							</li>
							<li>
								<a href="../styling/order-column.html">Base style - order-column</a>
							</li>
							<li>
								<a href="../styling/row-border.html">Base style - row borders</a>
							</li>
							<li>
								<a href="../styling/stripe.html">Base style - stripe</a>
							</li>
							<li>
								<a href="../styling/bootstrap.html">Bootstrap 3</a>
							</li>
							<li>
								<a href="../styling/bootstrap4.html">Bootstrap 4</a>
							</li>
							<li>
								<a href="../styling/foundation.html">Foundation</a>
							</li>
							<li>
								<a href="../styling/semanticui.html">Semantic UI</a>
							</li>
							<li>
								<a href="../styling/jqueryUI.html">jQuery UI ThemeRoller</a>
							</li>
							<li>
								<a href="../styling/material.html">Material Design (Tech. preview)</a>
							</li>
							<li>
								<a href="../styling/uikit.html">UIKit 3 (Tech. preview)</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../data_sources/index.html">Data sources</a></h3>
						<ul class="toc">
							<li>
								<a href="../data_sources/dom.html">HTML (DOM) sourced data</a>
							</li>
							<li>
								<a href="../data_sources/ajax.html">Ajax sourced data</a>
							</li>
							<li>
								<a href="../data_sources/js_array.html">Javascript sourced data</a>
							</li>
							<li>
								<a href="../data_sources/server_side.html">Server-side processing</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../api/index.html">API</a></h3>
						<ul class="toc">
							<li>
								<a href="../api/add_row.html">Add rows</a>
							</li>
							<li>
								<a href="../api/multi_filter.html">Individual column searching (text inputs)</a>
							</li>
							<li>
								<a href="../api/multi_filter_select.html">Individual column searching (select inputs)</a>
							</li>
							<li>
								<a href="../api/highlight.html">Highlighting rows and columns</a>
							</li>
							<li>
								<a href="../api/row_details.html">Child rows (show extra / detailed information)</a>
							</li>
							<li>
								<a href="../api/select_row.html">Row selection (multiple rows)</a>
							</li>
							<li>
								<a href="../api/select_single_row.html">Row selection and deletion (single row)</a>
							</li>
							<li>
								<a href="../api/form.html">Form inputs</a>
							</li>
							<li>
								<a href="../api/counter_columns.html">Index column</a>
							</li>
							<li>
								<a href="../api/show_hide.html">Show / hide columns dynamically</a>
							</li>
							<li>
								<a href="../api/api_in_init.html">Using API in callbacks</a>
							</li>
							<li>
								<a href="../api/tabs_and_scrolling.html">Scrolling and Bootstrap tabs</a>
							</li>
							<li>
								<a href="../api/regex.html">Search API (regular expressions)</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="./index.html">Ajax</a></h3>
						<ul class="toc active">
							<li class="active">
								<a href="./simple.html">Ajax data source (arrays)</a>
							</li>
							<li>
								<a href="./objects.html">Ajax data source (objects)</a>
							</li>
							<li>
								<a href="./deep.html">Nested object data (objects)</a>
							</li>
							<li>
								<a href="./objects_subarrays.html">Nested object data (arrays)</a>
							</li>
							<li>
								<a href="./orthogonal-data.html">Orthogonal data</a>
							</li>
							<li>
								<a href="./null_data_source.html">Generated content for a column</a>
							</li>
							<li>
								<a href="./custom_data_property.html">Custom data source property</a>
							</li>
							<li>
								<a href="./custom_data_flat.html">Flat array data source</a>
							</li>
							<li>
								<a href="./defer_render.html">Deferred rendering for speed</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../server_side/index.html">Server-side</a></h3>
						<ul class="toc">
							<li>
								<a href="../server_side/simple.html">Server-side processing</a>
							</li>
							<li>
								<a href="../server_side/custom_vars.html">Custom HTTP variables</a>
							</li>
							<li>
								<a href="../server_side/post.html">POST data</a>
							</li>
							<li>
								<a href="../server_side/ids.html">Automatic addition of row ID attributes</a>
							</li>
							<li>
								<a href="../server_side/object_data.html">Object data source</a>
							</li>
							<li>
								<a href="../server_side/row_details.html">Row details</a>
							</li>
							<li>
								<a href="../server_side/select_rows.html">Row selection</a>
							</li>
							<li>
								<a href="../server_side/jsonp.html">JSONP data source for remote domains</a>
							</li>
							<li>
								<a href="../server_side/defer_loading.html">Deferred loading of data</a>
							</li>
							<li>
								<a href="../server_side/pipeline.html">Pipelining data to reduce Ajax calls for paging</a>
							</li>
						</ul>
					</div>
					<div class="toc-group">
						<h3><a href="../plug-ins/index.html">Plug-ins</a></h3>
						<ul class="toc">
							<li>
								<a href="../plug-ins/api.html">API plug-in methods</a>
							</li>
							<li>
								<a href="../plug-ins/sorting_auto.html">Ordering plug-ins (with type detection)</a>
							</li>
							<li>
								<a href="../plug-ins/sorting_manual.html">Ordering plug-ins (no type detection)</a>
							</li>
							<li>
								<a href="../plug-ins/range_filtering.html">Custom filtering - range search</a>
							</li>
							<li>
								<a href="../plug-ins/dom_sort.html">Live DOM ordering</a>
							</li>
						</ul>
					</div>
				</div>
				<div class="epilogue">
					<p>Please refer to the <a href="http://www.datatables.net">DataTables documentation</a> for full information about its API properties and methods.<br>
					Additionally, there are a wide range of <a href="http://www.datatables.net/extensions">extensions</a> and <a href=
					"http://www.datatables.net/plug-ins">plug-ins</a> which extend the capabilities of DataTables.</p>
					<p class="copyright">DataTables designed and created by <a href="http://www.sprymedia.co.uk">SpryMedia Ltd</a> © 2007-2018<br>
					DataTables is licensed under the <a href="http://www.datatables.net/mit">MIT license</a>.</p>
				</div>
			</div>
		</div>
	</section>
</body>
</html>