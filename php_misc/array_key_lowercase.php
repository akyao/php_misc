<pre>
<?php
//�K�w�����ꂽ�z��̒��̃L�[�����ׂď������ɕϊ�����

// �P�����̔z��f�[�^
$data1 = array("KEY1-1" => "VALUE1-1", "Key1-2" => "Value1-2", "key1-3" => "value1-3");
// 2�����̔z��f�[�^
$data2 = array("KEY2-1" => "DATA2-1",
 "Key2-2" => $data1,
 "key2-3" => array("KEY3-1" => $data1));

var_dump(nested_array_change_key_case($data2));

function nested_array_change_key_case($array){
	$converted = array_change_key_case($array);
	foreach($converted as $key => $value){
		if(is_array($value)){
			$converted[$key] = nested_array_change_key_case($value);
		}
	}
	return $converted;
}

?>
</pre>