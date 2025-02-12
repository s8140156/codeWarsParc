<?php

// #79 How many lightsabers do you own?
// The only person who owns lightsabers is Zach, by the way. He owns 18, which is an awesome number of lightsabers. Anyone else owns 0.
// Note: your function should have a default parameter

// 參數沒有預設0 or '' 會導致測試codewars時 出現"ArgumentCountError"錯誤訊息 (表示測試沒有任何參數傳遞時會出現問題)
function howManyLightsabersDoYouOwn($name='') {
    // TODO: Make some stuff more good here
    if($name=='Zach'){
        return 18;
    }else{
        return 0;
    }
}

// function howManyLightsabersDoYouOwn($name = 0) {
//     return ($name === 'Zach') ? 18 : 0;
//   }

echo howManyLightsabersDoYouOwn('Adam');


?>