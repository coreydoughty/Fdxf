Fdxf - DXF Class
================


  - [Basics](#basics)
    - [Create and Construct](#create-and-construct)
    - [File System (Flysystem)](#file-system-flysystem)
    - [Output](#output)
  - [Section Headers](#section-headers)
  - [Section Tables](#section-tables)
    - [Set Layers](#set-layers)
  - [Section Blocks](#section-blocks)
    - [Set Block](#set-block)
  - [Section Entites Standard](#section-entites-standard)
    - [Line](#line)
    - [Circle](#circle)
    - [Arc](#arc)
    - [Text](#text)
    - [Polyline](#polyline-start-entity-close)
    - [Polyline Start](#polyline-start)
    - [Polyline Entity](#polyline-entity)
    - [Polyline Close](#polyline-close)
    - [Block Entity](#block-entity)
  - [Section Entities Complex](#section-entities-complex)
    - [Rectangle](#rectangle)


---
## Basics
---

See class Fdxf and Fdxf_Base.


### Create and Construct

  + __Object__: `new Fdxf( ... )`
    - Example: `$dxf = new Fdxf( $width, $height, $thickness );`
  + __Variables__:
    - _Overall Width (float)_: default 0.0
    - _Overall Height (float)_: default 0.0
    - _Overall Thickness (float)_: default 0.0


### File System (Flysystem)

  + __Method__: `SetFlysystem( ... )`
    - Example: `$dxf->SetFlysystem( new \Fdxf\Filesystem\Local() );`
  + __Notes__:
    - Use to easily swap out a local file system for a remote one.
    - See `Fdxf\Filesystem\Local` class for __Flysystem__ example
  + __Variables__:
    - _Flystem (object)_


### Output
  + __Method__: `Output( ... )`
    - Example A: `$dxf->Output( '/tmp/', 'drawing.dxf' );`
    - Example B: `$dxfstr = $dxf->Output();`
    - Returns a complete DXF string
  + __Notes__:
    - Used at the very end to output the completed object.
    - Can use __Flysytem__ to easily swap out a local file system for a remote one.
  + __Variables__:
    - _File Directory (string)_: default null
      * leave empty|null to not put in a file system
    - _File Name (string)_: default null
      * leave empty|null to not put in a file system


---
## Section Headers
---

Need to document; probably separately. See class Fdxf_Headers.


---
## Section Tables
---

Need to document more; possibly separately. See class Fdxf_Tables.


### Set Layers

  + __Method__: `SetLayers( ... )`
  + __Notes__:
    - Self numbering the array keys will make it easier to call later
    - Layer name _"0"_ is preset with color _7_.
    - Color number is an integer from _1_ through _255_.
      * Standard color names are available only for colors _1_ through _7_. The colors are assigned as follows:
        - _1_ Red
        - _2_ Yellow
        - _3_ Green
        - _4_ Cyan
        - _5_ Blue
        - _6_ Magenta
        - _7_ White/Black
  + __Variables__:
    - _Layers (array)_: A list of the layers used in the file, as an array.
    - Can be a simple array of strings or a multi-array with name and color keys with values.
      * Example A:
        - `$layers = array();`
        - `$layers[1] = array( 'NAMEA');`
        - `$layers[2] = array( 'NAMEB');`
        - `$dxf->SetLayers($layers);`
      * Example B:
        - `$layers = array()`;
        - `$layers[1] = array( 'name' => 'NAMEA', color => '1' )`;
        - `$layers[2] = array( 'name' => 'NAMEB', color => '2' )`;
        - `$dxf->SetLayers($layers);`


---
## Section Blocks
---

Need to document more; See class Fdxf_Blocks.


### Set Block

  + __Method__: `SetBlock( ... )`
    - Example: `$dxf->SetBlock( ... );`
    - Returns object
  + __Variables__:
    - _Block Entities (string)_: Use a pre-built entities string


---
## Section Entites Standard
---

See class Fdxf.


### Line

  + __Methods__:
    - `Line( ... )`
      * Example: `$line = $dxf->Line( ... );`
      * Returns a string for later use
    - `AddLine( ... )`
      * Example: `$dxf->AddLine( ... );`
        - Uses `Line( ... )` internally
      * Adds to current object's entities
      * Returns object
  + __Variables__:
    - _Layer Name (string)_: default "0"
    - _Start X (float)_: default 0.0
    - _Start Y (float)_: default 0.0
    - _Start Z (float)_: default 0.0
    - _End X (float)_: default 0.0
    - _End Y (float)_: default 0.0
    - _End Z (float)_: default 0.0
    - _Thickness (float)_: default 0.0


### Circle

  + __Methods__:
    - `Circle( ... )`
      * Example: `$circle = $dxf->Circle( ... );`
      * Returns a string for later use
    - `AddCircle( ... )`
      * Example: `$dxf->AddCircle( ... );`
        - Uses `Circle( ... )` internally
      * Adds to current object's entities
      * Returns object
  + __Variables__:
    - _Layer Name (string)_: default "0"
    - _Center X (float)_: default 0.0
    - _Center Y (float)_: default 0.0
    - _Center Z (float)_: default 0.0
    - _Radius (float)_: default 0.0
    - _Thickness (float)_: default 0.0


### Arc

  + __Methods__:
    - `Arc( ... )`
      * Example: `$arc = $dxf->Arc( ... );`
      * Returns a string for later use
    - `AddArc( ... )`
      * Example: `$dxf->AddArc( ... );`
        - Uses `Arc( ... )` internally
      * Adds to current object's entities
      * Returns object
  + __Variables__:
    - _Layer Name (string)_: default "0"
    - _Center X (float)_: default 0.0
    - _Center Y (float)_: default 0.0
    - _Center Z (float)_: default 0.0
    - _Radius (float)_: default 0.0
    - _Thickness (float)_: default 0.0
    - _Angle Start (float)_: default 0.0
    - _Angle End (float)_: default 0.0


### Text

  + __Methods__:
    - `Text( ... )`
      * Example: `$text = $dxf->Text( ... );`
      * Returns a string for later use
    - `AddText( ... )`
      * Example: `$dxf->AddText( ... );`
        - Uses `Text( ... )` internally
      * Adds to current object's entities
      * Returns object
  + __Variables__:
    - _Layer Name (string)_: default "0"
    - _Start X (float)_: default 0.0
    - _Start Y (float)_: default 0.0
    - _Start Z (float)_: default 0.0
    - _Text Height (float)_: default 0.0
    - _Rotation (float)_: default 0.0
    - _Text (string)_: default " "


### Polyline

 + See [Polyline Start](#polyline-start)
 + See [Polyline Entity](#polyline-entity)
 + See [Polyline Close](#polyline-close)
 + Example Combined:
   - `$dxf->AddPlineStart( ... );`
   - `$dxf->AddPlineEntity( ... );`
   - `$dxf->AddPlineEntity( ... );`
   - ...
   - `$dxf->AddPlineClose( ... );`


### Polyline Start

+ __Methods__:
  - `PlineStart( ... )`
    * Example: `$pline = $dxf->PlineStart( ... );`
    * Returns a string for later use
  - `AddPlineStart( ... )`
    * Example: `$dxf->AddPlineStart( ... );`
      - Uses `PlineStart( ... )` internally
    * Adds to current object's entities
    * Returns object
+ __Variables__:
  - _Layer Name (string)_: default "0"
  - _Start X (float)_: default 0.0
  - _Start Y (float)_: default 0.0
  - _Start Z (float)_: default 0.0
  - _Thickness (float)_: default 0.0


### Polyline Entity

  + __Methods__:
    - `PlineEntity( ... )`
      * Example: `$pline = $dxf->PlineEntity( ... );`
      * Returns a string for later use
    - `AddPlineEntity( ... )`
      * Example: `$dxf->AddPlineEntity( ... );`
        - Uses `PlineEntity( ... )` internally
      * Adds to current object's entities
      * Returns object
  + __Variables__:
    - _Layer Name (string)_: default "0"
    - _X (float)_: default 0.0
    - _Y (float)_: default 0.0
    - _Z (float)_: default 0.0
    - _Bulge (float)_: default 0.0
      * "The bulge is the tangent of 1/4 the included angle for an arc segment,
      made negative if the arc goes clockwise from the start point to the end
      point; a bulge of 0 indicates a straight segment, and a bulge of 1 is a
      semicircle. There is 16 digits for this."


### Polyline Close

  + __Methods__:
    - `PlineClose( ... )`
      * Example: `$pline = $dxf->PlineClose( ... );`
      * Returns a string for later use
    - `AddPlineClose( ... )`
      * Example: `$dxf->AddPlineClose( ... );`
        - Uses `PlineClose( ... )` internally
      * Adds to current object's entities
      * Returns object
  + __Variables__:
    - _Layer Name (string)_: default "0"


### Block Entity

  + __Methods__:
    - `BlockEntity( ... )`
      * Example: `$block = $dxf->BlockEntity( ... );`
      * Returns a string for later use
    - `AddBlockEntity( ... )`
      * Example: `$dxf->AddBlockEntity( ... );`
        - Uses `BlockEntity( ... )` internally
      * Adds to current object's entities
      * Returns object
  + __Notes__:
    - Inserts a block by name.
    - Block _must_ be set in blocks section.
    - See Set Block `SetBlock( ... )`
  + __Variables__:
    - _Layer Name (string)_: default "0"
    - _Block Name (string)_
    - _X (float)_: default 0.0
    - _Y (float)_: default 0.0
    - _Z (float)_: default 0.0
    - _Rotation (float)_: default 0.0


---
## Section Entities Complex
---

See class Fdxf.


### Rectangle

  + __Methods__:
    - `Rectangle( ... )`
      * Example: `$block = $dxf->Rectangle( ... );`
      * Returns a string for later use
    - `AddRectangle( ... )`
      * Example: `$dxf->AddRectangle( ... );`
        - Uses `Rectangle( ... )` internally
      * Adds to current object's entities
      * Returns object
  + __Variables__:
    - _Layer Name (string)_: default "0"
    - _Start X (float)_: default 0.0
    - _Start Y (float)_: default 0.0
    - _Start Z (float)_: default 0.0
    - _Height X (float)_: default 0.0
    - _Width Y (float)_: default 0.0
    - _Radius (float)_: default 0.0
    - _Thickness (float)_: default 0.0
    - _Offset Bottom (float)_: default 0.0
    - _Offset Top (float)_: default 0.0
    - _Offset Right (float)_: default 0.0
    - _Offset Left (float)_: default 0.0
    - _Offset Offset (float)_: default 0.0
