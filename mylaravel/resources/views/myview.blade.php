<h1> My view </h1>
<?php echo $value_id; ?>
{{ $value_id; }}|{{$myinput}}

<form action="{{url('/Mycontroller')}}"
    method="post">
    @csrf
    <input type="text" name = "myinput">
    <button type="submit">
        <button
            type="submit"
            
        >
            Submit
        </button>
</form>
<?php for($i=0;$i<10;$i++){?>
    <h1>{{$i}}</h1>

    <?php }?>
        