//product qty section

let $qty_up=$(".qty .qty_up");
let $qty_down=$(".qty .qty_down");
let $input=$(".qty.qty_input");

//click on qty up button
$qty_up.click(function(e){
    if($input.val()>=1&& $input.val()<=9){
        $input.val(function(i,oldval){
            return++oldval;
        })
    }
});