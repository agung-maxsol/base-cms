<?php
if(LanguageInstance::isActive()){
  $value = isset($value[def_lang()]) ? $value[def_lang()] : (isset($param->default) ? $param->default : null);
}
else{
  $value = $value ? $value : (isset($param->default) ? $param->default : null);
}
?>
<div class="form-group custom-form-group">
	<select name="theme[{{ $name }}][]" class="form-control theme-select2" style="width:100%; border:1px solid #ccc;"
	    @if(isset($param->attr))
	        @foreach($param->attr as $attr => $attrval)
	            @if(in_array($attr, ['class', 'name']))    
	                @continue
	            @endif
	            {{ $attr }}="{{ $attrval }}"
	        @endforeach
	    @endif
	>
	    <?php
	    if(LanguageInstance::isActive()){
	        $selected = isset($value[def_lang()]) ? $value[def_lang()] : (isset($param->default) ? $param->default : null);
	    }
	    else{
	        $selected = $value ? $value : (isset($param->default) ? $param->default : null);
	    }
	    ?>
	    <option value="0" {{ $value ? '' : 'selected' }}>No</option>
	    <option value="1" {{ $value ? 'selected' : '' }}>Yes</option>
	</select>	
</div>
