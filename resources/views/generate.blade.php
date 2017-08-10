@extends('layout')

@section('styles')
	<style>
		#clipper{
			cursor: pointer;
			font-size: 18px;
		}
	</style>
@endsection

@section('content')
   <div>
      	<div class="text-md-center text-lg-left">
         	<img class="logo1" src="assets/img/logo.png" alt="bar" srcset="assets/img/logo.png 1024w, assets/img/logo.png 2048w, assets/img/logo@2x.png 2x" >
      	</div>
      	<div class="container form" >
         	<div class="row justify-content-center">
            	<form class="form-inline" action="{{ route('store') }}" method="POST">
            		{{ csrf_field() }}
               		<div class="form-group col-12 justify-content-center text-center">
                  		<input type="number" name="days" class=" form-control mt-4" placeholder="Kaç Gün İçinde Silinecek" required style="min-width: 250px;">
                  		<button type="submit" class="mt-4 mr-3 ml-3">Link Oluştur</button>
               		</div>
              		@if(isset($link))
               		<div class="form-group justify-content-center col-12 text-center">
                  		<input type="text" name="link" id="link" class="form-control mt-4" readonly style="min-width: 250px;">
                 		<span data-clipboard-target="#link" id="clipper" class="mt-4 mr-3 ml-3 clipper likeButton">Linki Kopyala</span>
               		</div>
             		@endif
         		</form>
     		</div>
      	</div>
   </div>
@endsection

@section('scripts')
	@if(isset($link))
	<script>
		$(document).ready(function(){
			$.getJSON(
		        "http://api.bitly.com/v3/shorten?callback=?", 
		        { 
		            "format": "json",
		            "apiKey": "R_c433ae6f0980405da20eae226a712580",
		            "login": "tallrye",
		            "longUrl": "{{ route('home', ['link' => $link->link]) }}"
		        },
		        function(response)
		        {
		        	$('#link').val(response.data.url);
		        	
		        }
		    );


		});
		

	</script>
	<script src="https://cdn.jsdelivr.net/clipboard.js/1.6.0/clipboard.min.js"></script>
    <script>
        $(document).ready(function(){
        	var clipboard = new Clipboard('.clipper');
			clipboard.on('success', function(e) {

			});
        });
    </script>
    @endif
@endsection