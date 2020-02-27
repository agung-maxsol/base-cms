@extends ('main::master')

@section ('content')

<h3>{!! $title !!}</h3>


{!! $prepend_index !!}
{!! $datatable->view() !!}
{!! $append_index !!}

@stop

@push ('script')
@include ('main::assets.datatable', [
	'url' => url()->route('admin.'.$hint.'.datatable')
])
<script>
	$(".table-search-btn").on('click', function(){
		if($(this).hasClass('active')){
			$(this).removeClass('active');
			$(".table-search-filter").slideDown();
			$(this).find('span').html('Hide');
		}
		else{
			$(this).addClass('active');
			$(".table-search-filter").slideUp();
			$(this).find('span').html('Show');
		}
	});

	$('body').on('change', 'input[name="themes-active"]', function(evt) {
		_theme = evt.currentTarget.dataset.theme;
		$.ajax({
			url : "{{ url()->route('admin.themes.set_active') }}",
			type : 'POST',
			dataType : 'json',
			data : {
				_token : window.CSRF_TOKEN,
				theme : _theme,
			},
			beforeSend: function() {
				showLoading();
			},
			success : function(resp) {
				tb_data.ajax.reload();
				setTimeout(() => {
					hideLoading();
				}, 500);
			},
			error : function(resp){
				tb_data.ajax.reload();
				setTimeout(() => {
					hideLoading();
				}, 500);
			}
		});
	});

</script>
@endpush