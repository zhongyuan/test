
    <style>
    .cf:before, .cf:after{
      content:"";
      display:table;
    }
    .cf:after{
      clear:both;
    }
    .cf{
      zoom:1;
    }

    .form-wrapper {
        width: 550px;
        padding: 7px;
        margin: 10px auto;
        background: #f2f2f2;
        -moz-border-radius: 10px;
        -webkit-border-radius: 10px;
        border-radius: 10px;
        -moz-box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
        -webkit-box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
        box-shadow: 0 1px 1px rgba(0,0,0,.4) inset, 0 1px 0 rgba(255,255,255,.2);
    }

    .form-wrapper input {
        width: 430px;
        height: 10px;
        padding: 10px 5px;
        float: left;
        font: bold 15px 'lucida sans', 'trebuchet MS', 'Tahoma';
        border: 0;
        background: rgba(255, 255, 255, 0.86);
        -moz-border-radius: 3px 0 0 3px;
        -webkit-border-radius: 3px 0 0 3px;
        border-radius: 3px 0 0 3px;
    }

    .form-wrapper input:focus {
        outline: 0;
        background: #fff;
        -moz-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
        -webkit-box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
        box-shadow: 0 0 2px rgba(0,0,0,.8) inset;
    }

    .form-wrapper input::-webkit-input-placeholder {
       color: #999;
       font-weight: normal;
       font-style: italic;
    }

    .form-wrapper input:-moz-placeholder {
        color: #999;
        font-weight: normal;
        font-style: italic;
    }

    .form-wrapper input:-ms-input-placeholder {
        color: #999;
        font-weight: normal;
        font-style: italic;
    }

    .form-wrapper button {
		overflow: visible;
        position: relative;
        float: right;
        border: 0;
        padding: 0;
        cursor: pointer;
        height: 30px;
        width: 110px;
        font: bold 15px/30px 'lucida sans', 'trebuchet MS', 'Tahoma';
        color: #fff;
        text-transform: uppercase;
        background: rgb(255, 173, 47);;
        -moz-border-radius: 0 3px 3px 0;
        -webkit-border-radius: 0 3px 3px 0;
        border-radius: 0 5px 5px 0;
        text-shadow: 0 -1px 0 rgba(0, 0 ,0, .3);
    }

    .form-wrapper button:hover{
        background: rgb(255, 167, 31);
    }

    .form-wrapper button:active,
    .form-wrapper button:focus{
        background: rgb(255, 167, 31);
    }

    .form-wrapper button:before {
        content: '';
        position: absolute;
        border-width: 8px 8px 8px 0;
        border-style: solid solid solid none;
        border-color: transparent rgb(255, 173, 47); transparent;
        top: 8px;
        left: -6px;
    }

    .form-wrapper button:hover:before{
        border-right-color: rgb(255, 167, 31);
    }

    .form-wrapper button:focus:before{
        border-right-color: rgb(255, 167, 31);
    }

    .form-wrapper button::-moz-focus-inner {
        border: 0;
        padding: 0;
    }
    </style>

<form class="form-wrapper cf">
	<input type="text" placeholder="Search here..." required>
	<button type="submit" id="submit">Search</button>
</form>


<script>
$(function(){
    $('#submit').click(function(){
        
    });
});
</script>