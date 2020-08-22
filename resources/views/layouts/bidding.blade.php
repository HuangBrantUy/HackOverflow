@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <a href="{{url('/')}}" id="bidding-back-btn" style="font-size: 1.5em; color: #334E68;">
            <i class="fas fa-angle-left"></i>
        </a>
        <h1 class="mt-4 pb-5" style="border-bottom: 2px solid #D9E2EC; color: #334E68;">Bidding</h1>
        <div class="container" id="bidding-form-container">
            <form id="bidding-form">
                <div class="form-group row mb-4">
                    <div class="col-sm-1"></div>
                    <label for="inputPMO" class="col-sm-4 col-form-label">Project Management Office</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="inputPMO" placeholder="">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-sm-1"></div>
                    <label for="inputMOP" class="col-sm-4 col-form-label">Mode of Procurement</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputMOP" placeholder="">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-sm-1"></div>
                    <label for="inputBL" class="col-sm-4 col-form-label">Business License</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control" id="inputBL" placeholder="">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-sm-1"></div>
                    <label for="inputEmail" class="col-sm-4 col-form-label"> Business Email Address</label>
                    <div class="col-sm-5">
                        <input type="email" class="form-control" id="inputEmail" placeholder="">
                    </div>
                </div>

                <h2 class="pb-3 mb-5" style="border-bottom: 2px solid #D9E2EC; color: #334E68;">Schedule for Each Procurement Activity</h2>


                <div class="form-group row mb-4">
                    <div class="col-sm-1"></div>
                    <label for="inputPPC" class="col-sm-4 col-form-label">Pre-Proc Conference</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputPPC" placeholder="">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-sm-1"></div>
                    <label for="inputIB" class="col-sm-4 col-form-label">Ads/Post of IB</label>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="inputIB" placeholder="">
                    </div>
                </div>

                <h2 class="pb-3 mb-5" style="border-bottom: 2px solid #D9E2EC; color: #334E68;">Estimated Budget (Php)</h2>

                <div class="form-group row mb-4">
                    <div class="col-sm-1"></div>
                    <label for="inputTotal" class="col-sm-4 col-form-label">Total</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="inputTotal" placeholder="">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-sm-1"></div>
                    <label for="inputMODE" class="col-sm-4 col-form-label">MODE</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="inputMODE" placeholder="">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-sm-1"></div>
                    <label for="inputCO" class="col-sm-4 col-form-label">CO</label>
                    <div class="col-sm-4">
                        <input type="number" class="form-control" id="inputCO" placeholder="">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <div class="col-8"></div>
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary float-right" style="border-radius:2em; background-color:#003E6B;" data-toggle="modal" data-target="#bidModal">
                            Apply Bid
                        </button>
                        <button type="" class="btn float-right mr-3">Cancel</button>
                    </div>
                </div>
            </form>
        </div>
        
        <!-- Modal -->
        <div class="modal fade" id="bidModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg w-50" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title" id="bidding-summary-title">Bidding Summary</h2>
                    </div>
                    <div class="modal-body">
                        <form id="bidding-summary-modal-form">
                            <div class="form-group row mb-4">
                                <div class="col-sm-2"></div>
                                <label for="inputPMO" class="col-sm-4 col-form-label">Project Management Office</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="XXXXXXXXXXXXXXX">
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
            
                            <div class="form-group row mb-4">
                                <div class="col-sm-2"></div>
                                <label for="inputMOP" class="col-sm-4 col-form-label">Mode of Procurement</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Mode of Procurement">
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
            
                            <div class="form-group row mb-4">
                                <div class="col-sm-2"></div>
                                <label for="inputBL" class="col-sm-4 col-form-label">Business License</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Business License">
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
            
                            <div class="form-group row mb-4">
                                <div class="col-sm-2"></div>
                                <label for="inputEmail" class="col-sm-4 col-form-label"> Business Email Address</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="email@example.com">
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
            
                            <div class="form-group row mb-4">
                                <div class="col-sm-2"></div>
                                <label for="inputPPC" class="col-sm-4 col-form-label">Pre-Proc Conference</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Pre-Proc Conference">
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
            
                            <div class="form-group row mb-4">
                                <div class="col-sm-2"></div>
                                <label for="inputIB" class="col-sm-4 col-form-label">Ads/Post of IB</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="Ads/Post of IB">
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
            
                            <div class="form-group row mb-4">
                                <div class="col-sm-2"></div>
                                <label for="inputTotal" class="col-sm-4 col-form-label">Total</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="P XXX,XXX,XXX">
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
            
                            <div class="form-group row mb-4">
                                <div class="col-sm-2"></div>
                                <label for="inputMODE" class="col-sm-4 col-form-label">MODE</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="P XXX,XXX,XXX">
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
            
                            <div class="form-group row mb-4">
                                <div class="col-sm-2"></div>
                                <label for="inputCO" class="col-sm-4 col-form-label">CO</label>
                                <div class="col-sm-4">
                                    <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="P XXX,XXX,XXX">
                                </div>
                                <div class="col-sm-2"></div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" style="border-radius: 2em">Go back to project</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection