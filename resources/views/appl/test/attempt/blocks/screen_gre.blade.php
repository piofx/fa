<div class="mb-3">
	<div class="part p-3">
	<div class="row">
		<div class="col-12  col-lg-5">
			<h3 class="mb-4"><i class="fa fa-clone"></i> {{ $section->name}}</h3>
		</div>
		<div class="col-12 col-12 col-lg">
			<div class="row no-gutters">
				<div class="col-4 col-md-3 col-lg-3">
					<div class="border rounded  p-2 mr-1">
						<div class="text-center">Exit Section<br>
						<i class="fa fa-toggle-right"></i></div>
					</div>
				</div>
				<div class="col-md-3 col-lg-3">
					<div class="border rounded  p-2 ml-1 mr-1">
						<div class="text-center">Review<br>
						<i class="fa fa-bookmark-o"></i></div>
					</div>
				</div>
				<div class="col-md-2 col-lg-2">
					<div class="border rounded  p-2 ml-1 mr-1">
						<div class="text-center">Mark<br>
						<i class="fa fa-square-o"></i></div>
					</div>
				</div>
				
				<div class="col-md-2">
					<div class="border rounded  p-2 ml-1 mr-1">
						<div class="text-center">Prev<br>
						<i class="fa fa-arrow-left"></i></div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="border rounded  p-2 ml-1 ">
						<div class="text-center">Next<br>
						<i class="fa fa-arrow-right"></i></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<div class="p-2 pl-3 pr-3" style="background:#aee8e9;"> <b>Section 1 of 3</b> &nbsp;|&nbsp; Question 3 of 7
	<span class="float-right">0:27:39 &nbsp;<i class="fa fa-minus-circle"></i> Hide Time</span>
	</div>
	
	<div class="mb-3">
	<div class="bg-white border-top p-4">
	@if(count($section->mcq_order)!=0)
		@include('appl.test.attempt.blocks.mcq_gre')
	@endif

	@if(count($section->fillup_order)!=0)
		@include('appl.test.attempt.blocks.fillup_gre')
	@endif
	</div>
</div>
</div>