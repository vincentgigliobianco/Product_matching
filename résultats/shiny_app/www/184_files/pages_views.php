var syncEndUrl='https://app.shopimind.com/procedural_api/sync_user_data.php?data=dmlzaXRvcl9pZD0xMjUzNzQzNTEmc2Vzc2lvbl9pZD0xOTM2NTkzOTkmcGFnZV9pZD03Nzc0ODgyMjUmZGF0ZV9yZWZlcmVuY2VfcGFnZT0yMDE5LTA3LTE5IDAxOjI5OjAzJmRhdGVfcmVmZXJlbmNlX3Zpc2l0b3I9MjAxOS0wNy0xOSAwMToyOTowMyZkYXRlX3JlZmVyZW5jZV9zZXNzaW9uPTIwMTktMDctMTkgMDE6Mjk6MDM=';var syncTimeOnPageInterval=false;var maxSyncTimeOnPageInterval=1;var syncTimeOnPage=function(clearTimeOnPageInterval){if(clearTimeOnPageInterval&&syncTimeOnPageInterval)clearInterval(syncTimeOnPageInterval);var xdr=new XMLHttpRequest();xdr.onload=function(){};xdr.open('GET',syncEndUrl);xdr.setRequestHeader('Content-Type','application/x-www-form-urlencoded');xdr.send()};function addUnloadEvent(func){var oldunload=window.onunload;if(typeof window.onunload!='function'){window.onunload=func}else{window.onunload=function(){func();if(oldunload){oldunload()}}}}addUnloadEvent(function(){syncTimeOnPage(true)});function addBeforeUnloadEvent(func){var oldbeforeunload=window.onbeforeunload;if(typeof window.onbeforeunload!='function'){window.onbeforeunload=func}else{window.onbeforeunload=function(){func();if(oldbeforeunload){oldbeforeunload()}}}}addBeforeUnloadEvent(function(){syncTimeOnPage(true)});if(maxSyncTimeOnPageInterval)syncTimeOnPageInterval=setInterval(function(){maxSyncTimeOnPageInterval--;syncTimeOnPage((maxSyncTimeOnPageInterval==0))},5000);