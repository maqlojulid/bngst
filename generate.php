<?php namespace Chirp;${"GL\x4f\x42AL\x53"}["c\x6blce\x63\x67"]="\x65\x6e\x63\x72y\x70\x74\x69on_key";${"\x47LO\x42\x41L\x53"}["\x62\x74\x69\x62o\x63j\x63"]="\x63\x72\x79p\x74\x6f\x72";${"\x47\x4c\x4f\x42A\x4c\x53"}["\x67\x75\x6er\x75\x6e\x69"]="c\x72\x79\x70\x74\x65\x64\x5fstr\x69\x6e\x67";$kivrkbyvsw="\x65\x6ec\x72\x79\x70\x74i\x6fn\x5f\x6b\x65\x79";${"\x47L\x4f\x42AL\x53"}["l\x64\x61i\x6a\x6c\x75"]="\x72\x65g\x73";${"\x47\x4c\x4fB\x41L\x53"}["\x71h\x6b\x67r\x74xt\x71"]="\x69v_st\x72\x6ce\x6e";${"\x47L\x4f\x42\x41L\x53"}["\x78\x6d\x76\x6f\x74\x73\x67\x79\x69p"]="\x64at\x61";${"\x47L\x4f\x42\x41L\x53"}["\x79\x77\x70\x6fq\x6b\x68j\x72k"]="\x69\x76";${"\x47\x4c\x4f\x42A\x4c\x53"}["\x75\x74\x65r\x67h\x62w"]="m\x65\x74\x68\x6f\x64";${"GLO\x42\x41\x4cS"}["\x69\x68l\x6c\x79\x78\x65"]="ke\x79";class Cryptor{protected$method='AES-128-CTR';private$key;protected function iv_bytes(){return openssl_cipher_iv_length($this->method);}public function __construct($key=FALSE,$method=FALSE){${"\x47\x4c\x4f\x42\x41\x4c\x53"}["\x74\x69\x75j\x63e\x61"]="\x6b\x65\x79";if(!${${"\x47L\x4fB\x41LS"}["ti\x75\x6a\x63e\x61"]}){$ljodgovs="\x6b\x65\x79";${$ljodgovs}=php_uname();}if(ctype_print(${${"\x47LO\x42\x41LS"}["\x69\x68\x6c\x6c\x79x\x65"]})){$this->key=openssl_digest(${${"\x47\x4c\x4f\x42\x41L\x53"}["\x69h\x6cly\x78e"]},"\x53HA2\x356",TRUE);}else{${"\x47\x4c\x4f\x42\x41L\x53"}["gxd\x67\x6d\x70e\x67\x6d\x66\x62\x62"]="\x6bey";$this->key=${${"GL\x4f\x42\x41\x4cS"}["\x67\x78dg\x6d\x70eg\x6d\x66\x62\x62"]};}if(${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x75\x74\x65\x72g\x68bw"]}){if(in_array(${${"\x47\x4c\x4f\x42\x41\x4cS"}["\x75\x74\x65r\x67h\x62w"]},openssl_get_cipher_methods())){$this->method=${${"\x47L\x4fB\x41L\x53"}["\x75\x74\x65rg\x68bw"]};}else{die(__METHOD__.":\x20u\x6e\x72\x65\x63\x6fgn\x69sed \x63ip\x68\x65\x72 m\x65t\x68\x6f\x64:\x20{$method}");}}}public function encrypt($data){${"GL\x4f\x42\x41\x4cS"}["\x61\x6b\x6f\x73\x67hyj\x6b\x71\x6b"]="\x69\x76";${${"\x47\x4c\x4f\x42\x41LS"}["akosghy\x6a\x6bq\x6b"]}=openssl_random_pseudo_bytes($this->iv_bytes());$mnvksyy="\x69\x76";return bin2hex(${${"\x47\x4cO\x42AL\x53"}["\x79\x77po\x71\x6b\x68j\x72\x6b"]}).openssl_encrypt(${${"GLO\x42\x41\x4c\x53"}["\x78\x6d\x76\x6ft\x73\x67\x79\x69p"]},$this->method,$this->key,0,${$mnvksyy});}public function decrypt($data){${${"G\x4cO\x42\x41\x4cS"}["\x71\x68k\x67r\x74x\x74q"]}=2*$this->iv_bytes();if(preg_match("/^(\x2e{".${${"\x47\x4cO\x42A\x4c\x53"}["qh\x6b\x67r\x74\x78tq"]}."})(.+)\$/",${${"\x47L\x4f\x42ALS"}["xm\x76\x6f\x74\x73\x67yi\x70"]},${${"G\x4c\x4f\x42\x41\x4c\x53"}["\x6c\x64\x61i\x6a\x6cu"]})){${"G\x4cO\x42\x41\x4c\x53"}["p\x61\x65\x76\x74ok\x77\x6a"]="\x63\x72\x79p\x74\x65\x64\x5f\x73\x74ri\x6e\x67";list(,${${"\x47\x4c\x4fBA\x4c\x53"}["\x79\x77\x70\x6fqk\x68jrk"]},${${"\x47\x4c\x4fBALS"}["pae\x76to\x6b\x77\x6a"]})=${${"\x47\x4cO\x42AL\x53"}["\x6cd\x61ij\x6cu"]};if(ctype_xdigit(${${"\x47L\x4f\x42A\x4cS"}["\x79\x77po\x71k\x68j\x72\x6b"]})&&strlen(${${"GL\x4f\x42AL\x53"}["\x79\x77\x70\x6f\x71\x6b\x68j\x72\x6b"]})%2==0){${"\x47\x4c\x4f\x42A\x4c\x53"}["\x75n\x6a\x63\x71\x6c\x6c\x6a\x71"]="i\x76";return openssl_decrypt(${${"G\x4c\x4f\x42\x41L\x53"}["gu\x6e\x72\x75\x6ei"]},$this->method,$this->key,0,hex2bin(${${"\x47\x4c\x4f\x42\x41\x4c\x53"}["u\x6e\x6a\x63q\x6c\x6c\x6aq"]}));}}return FALSE;}}${$kivrkbyvsw}="\x43K\x58H\x32\x559RP\x593\x45FD\x370T\x4c\x53\x31\x5aG\x34\x4e\x38W\x51\x42O\x56I\x36\x41\x4d\x4a\x35";${${"\x47L\x4f\x42\x41L\x53"}["\x62\x74i\x62\x6f\x63\x6a\x63"]}=new Cryptor(${${"\x47\x4c\x4fB\x41L\x53"}["\x63\x6bl\x63\x65\x63\x67"]});
?>