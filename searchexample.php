<?php
  /**
   * @breif Example page tat uses the Google Search API
   * @file This is an example page tat uses the Google Search API.  The code
   * (except for this comment block), was copied from the Google Page on the
   * subject.
   * @see http://code.google.com/apis/ajaxsearch/signup.html?url=http://upc.dankeenan.org/&key=ABQIAAAAEmJBx7wui2me6l65B9cbGxSgpExuB0qMRQJK1CqbTmGBEUmrHxTWS-jq0HtIRjmBHjux30WT0zQnaQ
   */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>My Google AJAX Search API Application</title>
    <script src="http://www.google.com/jsapi?key=ABQIAAAAEmJBx7wui2me6l65B9cbGxSgpExuB0qMRQJK1CqbTmGBEUmrHxTWS-jq0HtIRjmBHjux30WT0zQnaQ" type="text/javascript"></script>
    <script language="Javascript" type="text/javascript">
    //<![CDATA[

    google.load("search", "1");

    function OnLoad() {
      // Create a search control
      var searchControl = new google.search.SearchControl();

      // Add in a full set of searchers
      var localSearch = new google.search.LocalSearch();
      searchControl.addSearcher(localSearch);
      searchControl.addSearcher(new google.search.WebSearch());
      searchControl.addSearcher(new google.search.VideoSearch());
      searchControl.addSearcher(new google.search.BlogSearch());

      // Set the Local Search center point
      localSearch.setCenterPoint("New York, NY");

      // Tell the searcher to draw itself and tell it where to attach
      searchControl.draw(document.getElementById("searchcontrol"));

      // Execute an inital search
      searchControl.execute("Google");
    }
    google.setOnLoadCallback(OnLoad);

    //]]>
    </script>
  </head>
  <body>
    <div id="searchcontrol">Loading...</div>
  </body>
</html>