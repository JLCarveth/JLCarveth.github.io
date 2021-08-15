/*******************************************************************************
 * success.js
 * Author: John L. Carveth
 * Purpose: Detects the presence of GET params indicating a success
 ******************************************************************************/
const queryString   = window.location.search;
const params        = new URLSearchParams(queryString);

if (params.get("success") == "1") {
    document.getElementById("successBanner").style.visibility = "visible"
} else {
    document.getElementById("successBanner").style.visibility = "hidden"
}