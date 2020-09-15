<?php
return function () {
		return collection('allExhibitions')->filterBy('closingdate', 'date <', 'today');
};