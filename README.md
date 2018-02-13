Fdxf
====

A PHP class to build simple DXF ASCII files.

Preliminary alpha stage. Currently only release 12.



## Installation

Add to your "__composer.json__" file under the "__require__" section:

```
"fdxf/fdxf": "^0.1"
```


Update composer

```sh
php composer.phar update
```



## Usage

In your php file that you want to use the class add a use statement.

```php
use Fdxf\Fdxf;
```

Then use as per the documantation.

``` php
$pdf = new Fdxf();
```

Alternatively you can extend as a typical php class.

```php
class CustomDxf extends Fdxf
{
    /**
     * CustomDxf constructor.
     * Can set width, height, and thickness of drawing.
     *
     * @param float $X
     * @param float $Y
     * @param float $Z
     */
    public function __construct(
        $X = 0.0,
        $Y = 0.0,
        $Z = 0.0
    ) {
        @parent::__construct(
            $X,
            $Y,
            $Z
        );
        
        // ...
    }
}
```



### To Do

  * Documentation
  * Tests



### License (MIT)

```text
Copyright (c) 2010-2017 Corey Doughty

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is furnished
to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
```

