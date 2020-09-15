<?php
return function () {
	if (collection('currentExhibitions')->isNotEmpty()) { // One or more current shows
		$featuredExhibitions = collection('currentExhibitions')->limit(2); // Max two 
	} elseif (collection('upcomingExhibitions')->isNotEmpty()) { // No current shows but one or more future shows
		$featuredExhibitions = collection('upcomingExhibitions')->limit(2); // Max two 		
	} else { // No current or future shows, only past 
		$featuredExhibitions = collection('pastExhibitions')->limit(1);
	}
	return $featuredExhibitions;
};