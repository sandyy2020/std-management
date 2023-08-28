@extends('layout.default')

@section('content')
<h1>Registration Page</h1>

<div class="row">
						<div class="col-md-12 col-sm-12 ">
							<div class="x_panel">
								
								<div class="x_content">
									<br />
									<h2>Fee Deposits:
										<?php
										if($fee){
											$total=0;
											foreach($fee as $key=>$value){
												$total=$total+$value['amount'];
											}
											echo $total;
										}
								
										?>
									</h2>
                                    <form action="{{url('fee-add')}}" method="post" id="demo-form2" class="form-horizontal form-label-left" enctype="multipart/form-data">
                                        @csrf
                                        <div class="item form-group">
											<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Amount <span class="required">*</span>
											</label>
											<div class="col-md-6 col-sm-6 ">
												<input type="text" name="amount" id="amount" required="required" class="form-control ">
                                                <input type="hidden" name="id" value="{{$id}}">
											</div>
										</div>
                                        <div class="ln_solid"></div>
										<div class="item form-group">
											<div class="col-md-6 col-sm-6 offset-md-3">
												
												<button class="btn btn-primary" type="reset">Reset</button>
												<button type="submit" name="submit" class="btn btn-success">Submit</button>
											</div>
										</div>

                                </div>
                            </div>
                        </div>
</div>

@endsection