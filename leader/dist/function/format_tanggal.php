<?php
	function format_tanggal($tgl) {
		$blns = array("", "Januari", "Febuari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		$hrs = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
		$tgls = getdate(strtotime($tgl));
		$hr = (strlen($tgls['mday']) == 1 ? "0". $tgls['mday'] : $tgls['mday']);
		$tanggal = $hrs[$tgls['wday']] .", ". $hr ."-". $blns[$tgls['mon']] ."-". $tgls['year'];
		
		return $tanggal;
	}
	function format_tgl($tgl) {
		$blns = array("", "Januari", "Febuari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		$hrs = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu");
		$tgls = getdate(strtotime($tgl));
		$hr = (strlen($tgls['mday']) == 1 ? "0". $tgls['mday'] : $tgls['mday']);
		$tanggal = $hr ." ". $blns[$tgls['mon']] . " ".$tgls['year'];
		
		return $tanggal;
	}
	function format_tanggal_lahir($tpt, $tgl) {
		$blns = array("", "Januari", "Febuari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		$tgls = getdate(strtotime($tgl));
		$hr = (strlen($tgls['mday']) == 1 ? "0". $tgls['mday'] : $tgls['mday']);
		$tanggal = $tpt .", ". $hr ."-". $blns[$tgls['mon']] ."-". $tgls['year'];
		
		return $tanggal;
	}
	function format_tanggal_laporan($tpt, $tgl) {
		$blns = array("", "Januari", "Febuari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		$tgls = getdate(strtotime($tgl));
		$hr = (strlen($tgls['mday']) == 1 ? "0". $tgls['mday'] : $tgls['mday']);
		$tanggal = $tpt .", ". $hr ." ". $blns[$tgls['mon']] ." ". $tgls['year'];
		
		return $tanggal;
	}
	function format_tanggal_strip($tgl) {
		$tgls = getdate(strtotime($tgl));
		$hr = (strlen($tgls['mday']) == 1 ? "0". $tgls['mday'] : $tgls['mday']);
		$tanggal = $hr ."-". $tgls['mon'] ."-". $tgls['year'];
		
		return $tanggal;
	}
?>