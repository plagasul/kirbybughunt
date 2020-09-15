<?php
return function () {
		return collection('allExhibitions')->filterBy('openingdate', 'date >', 'today');
};