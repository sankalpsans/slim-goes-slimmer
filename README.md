# slim-goes-slimmer
HTML pages with embedded JS or complicated division hierarchy are written with indentation for readability and good developer experience. This causes websites' source codes to look like this:
```
<html>
  <body>
    <div>
      <div>
        <span>
          <ul>
            <li>
              <a>
                Some content here
              </a>
            </li>
            <li>
              <a>
                Some other here
              </a>
            </li>
            <li>
              <a>
                Still another content here
              </a>
            </li>
          </ul>
        </span>
      </div>
    </div>
    <script>
      function someAwesomeFunction() {
        // This function does something
        for() {
          if() {
           // Some code here
          } else {
           // Some more code here
          }
        }
      }
    </script>
  </body>
</html>
```
I did a rough benchmarking of this on several popular media websites and found that we waste somewhere from 20 to 30% bandwidth to indented HTML and JavaScript.
So, I decided to solve this problem, and implement this for Slim framework first, because this the framework I'm currently working with.
