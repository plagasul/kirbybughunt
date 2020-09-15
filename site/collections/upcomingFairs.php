<?php
return function () {
		return collection('allFairs')->filterBy('openingdate', 'date >', 'today');
};