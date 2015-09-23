# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased][unreleased]
### Added
- Implement wrappers for all calculation to optional using bc_math, GMP or another extentions.    
- Solid package.
- Plane\ShapeInterface? 
- Implement library Facade. 
- Add support for proxing via external Gateway over interfaces?  
- Implement configuration for units, precision etc.
- Comparators for Shapes and their characters.
- InspectorsCollection? 
- New methods to PolygonInspector: check for common types of polygons. 
- Methods for creating Incircle and Circumcircle by given Polygon (in CurveFactory?). 
- Generated documentation.  

### Changed
- Normalize naming of arguments, fields and methods. To fix in some guideline.

## 0.5.3 - 2015-09-XX
### Fixed
- Collections interfaces inheritance. 

## 0.5.2 - 2015-09-24
### Added
- Polygon::getLength() for perimeter. 
- CollectionInterface over abstract class.  
- ::toArray() for collections. 

### Fixed
- Missing interface in AbstractPolygon for correct inject Calc. 
- Remove dublicated code from Polygon implementations. 

## 0.5.1 - 2015-09-23
### Changed
- Use universal formula for polygon area calculation. 

## 0.5.0 - 2015-09-20
### Added
- LineSegmentCollection classes and related methods in LinesFactory. 
- Method PolygonInspector::isRegularPolygon().  
- AngleCollection. 
- LineSegment::getListOfCoordinates() - useful for list assigment. 

### Changed
- Rename ComposeCalculator to CompositeCalculator.
- Concept of DI and related interfaces.  All Factories now implement AbstractFactory and inject dependecies.  

### Fixed
- Bug with creating Circle by DiameterSegment in Factory. 

## 0.4.2 - 2015-09-19
### Added
- PolygonCalculator classes.
- PolygonInspector classes.   

## 0.4.1 - 2015-09-18
### Added
- Curves Factory.  

### Changed 
- Use Caclulator for getting Ellipse sizes. 
- Facade PlaneGeometry now implement FactoriesCollectionInterface.  

### Fixed
- Merge class map in ComposeCalculator for change implementation for some calc. 
- Merge class map in FactoriesCollection for change implementation for some factory. 
- Get existing factory from pool. 

## 0.4.0 - 2015-09-17
### Fixed
- Bug in ComposeCalculator::getCalculator(). 
- Restore Constant overriding implementation

### Added
- Circle entity and calculator classes.
- Ellipse implementation.
- Factory method for Point. 
- LineSegmentInterface::getCentalPoint() method.

### Changed
- CircleInterface. 

## 0.3.1 - 2015-09-13
### Added 
- LengthCalculator classes. 

### Changed 
- Circle class moved to Curves package. 

### Removed
- Unused implementation for dymanic Constants: ConstantsAwareInreface and trait.  

## 0.3.0 - 2015-09-13
### Changed 
- Rename calcalation classes and methods. KISS =)
- Rename Ray::getPointA() to getFirstPoint(). 

### Added
- AngleSizeUnit classes. 
- AngleFactory classes. 
- LineInterface.
- RayInterface.
- Exceptions namespace. 

### Fixed
- Up testing coverage to 100%.  


## 0.2.0 - 2015-09-11
### Added
- Service locators for calculation strategies and shapes factories. 
- New getters for Angle. 
- Traits for inject dependecies.  
- LineSegmentInterface and other interfaces.  

### Changed
- Rename unit test super class to GeometryUnitTestCase.
- Constants inheritance: one class non-abstract class. 
- Getters names for points in LineSegment. 

### Removed 
- DefaultContants class. 
- Static PlaneGeometry Singleton contructor.   

## 0.1.0 - 2015-09-10
### Added
- Library Facade: samizdam\Geometry\Plane\PlaneGeometry. 
- Constants container. 
- Angle sub-package: Angle class. 
- Split Plane entities to sub-packages.
- Use PI configurable constant. 

## 0.0.1 - 2015-09-07
### Added
- A few primitives and simple shapes with basic functionality: Point, Line, Raw, Circle, Triangle, Polygon. 
- Unit tests for full coverage. 