<!-- HTML --> 
<input class="qwerty" type="text" placeholder="Enter something...">
// Script 
// Autocomplete demo 
var availableTags = ["ActionScript", "AppleScript", "Asp", "BASIC", "C", "C++", "Clojure", 
 "COBOL", "ColdFusion", "Erlang", "Fortran", "Groovy", "Haskell", "Java", "JavaScript", 
 "Lisp", "Perl", "PHP", "Python", "Ruby", "Scala", "Scheme" ]; 
 
$('.qwerty:eq(0)') 
 .keyboard({ layout: 'qwerty' }) 
 .autocomplete({ 
  source: availableTags 
 }) 
 .addAutocomplete() 
 .addTyping();
