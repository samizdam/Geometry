# Change Log
All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased][unreleased]
### Added
- Implement wrappers for all calculation to optional using bc_math, GMP or another extentions.    
- Solid package.
- Plane\ShapeInterface. 
- Implement library Facade. 
- Add support for proxing via external Gateway over interfaces?  
- Implement configuration for units, precision etc.  

### Changed
- Normalize naming of arguments, fields and methods. To fix in some guideline.  
- Extract LineSegment length calculation. 

### Fixed
- Up testing coverage to 100%.  

## 0.2.1 - 2015-XX-XX
### Change 
- Rename calcalation classes. KISS =)

 


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