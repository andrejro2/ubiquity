<?php

namespace Ubiquity\controllers\crud;

class CRUDEvents {
	
	public function onDetailClickURL($model){
		return "";
	}
	
	public function onSuccessDeleteMessage(CRUDMessage $message):CRUDMessage{
		return $message;
	}
	
	public function onErrorDeleteMessage(CRUDMessage $message):CRUDMessage{
		return $message;
	}
	
	public function onConfDeleteMessage(CRUDMessage $message):CRUDMessage{
		return $message;
	}
	
	public function onSuccessUpdateMessage(CRUDMessage $message):CRUDMessage{
		return $message;
	}
	
	public function onErrorUpdateMessage(CRUDMessage $message):CRUDMessage{
		return $message;
	}
	
	public function onNotFoundMessage(CRUDMessage $message):CRUDMessage{
		return $message;
	}
}

