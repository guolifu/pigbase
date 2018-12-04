var BinaryFile=function(strData,iDataOffset,iDataLength){var data=strData;var dataOffset=iDataOffset||0;var dataLength=0;this.getRawData=function(){return data};if(typeof strData=="string"){dataLength=iDataLength||data.length;this.getByteAt=function(iOffset){return data.charCodeAt(iOffset+dataOffset)&255};this.getBytesAt=function(iOffset,iLength){var aBytes=[];for(var i=0;i<iLength;i++){aBytes[i]=data.charCodeAt(iOffset+i+dataOffset)&255}return aBytes}}else if(typeof strData=="unknown"){dataLength=iDataLength||IEBinary_getLength(data);this.getByteAt=function(iOffset){return IEBinary_getByteAt(data,iOffset+dataOffset)};this.getBytesAt=function(iOffset,iLength){return new VBArray(IEBinary_getBytesAt(data,iOffset+dataOffset,iLength)).toArray()}}this.getLength=function(){return dataLength};this.getSByteAt=function(iOffset){var iByte=this.getByteAt(iOffset);if(iByte>127)return iByte-256;else return iByte};this.getShortAt=function(iOffset,bBigEndian){var iShort=bBigEndian?(this.getByteAt(iOffset)<<8)+this.getByteAt(iOffset+1):(this.getByteAt(iOffset+1)<<8)+this.getByteAt(iOffset);if(iShort<0)iShort+=65536;return iShort};this.getSShortAt=function(iOffset,bBigEndian){var iUShort=this.getShortAt(iOffset,bBigEndian);if(iUShort>32767)return iUShort-65536;else return iUShort};this.getLongAt=function(iOffset,bBigEndian){var iByte1=this.getByteAt(iOffset),iByte2=this.getByteAt(iOffset+1),iByte3=this.getByteAt(iOffset+2),iByte4=this.getByteAt(iOffset+3);var iLong=bBigEndian?(((iByte1<<8)+iByte2<<8)+iByte3<<8)+iByte4:(((iByte4<<8)+iByte3<<8)+iByte2<<8)+iByte1;if(iLong<0)iLong+=4294967296;return iLong};this.getSLongAt=function(iOffset,bBigEndian){var iULong=this.getLongAt(iOffset,bBigEndian);if(iULong>2147483647)return iULong-4294967296;else return iULong};this.getStringAt=function(iOffset,iLength){var aStr=[];var aBytes=this.getBytesAt(iOffset,iLength);for(var j=0;j<iLength;j++){aStr[j]=String.fromCharCode(aBytes[j])}return aStr.join("")};this.getCharAt=function(iOffset){return String.fromCharCode(this.getByteAt(iOffset))};this.toBase64=function(){return window.btoa(data)};this.fromBase64=function(strBase64){data=window.atob(strBase64)}};var EXIF={};(function(){var bDebug=false;EXIF.Tags={36864:"ExifVersion",40960:"FlashpixVersion",40961:"ColorSpace",40962:"PixelXDimension",40963:"PixelYDimension",37121:"ComponentsConfiguration",37122:"CompressedBitsPerPixel",37500:"MakerNote",37510:"UserComment",40964:"RelatedSoundFile",36867:"DateTimeOriginal",36868:"DateTimeDigitized",37520:"SubsecTime",37521:"SubsecTimeOriginal",37522:"SubsecTimeDigitized",33434:"ExposureTime",33437:"FNumber",34850:"ExposureProgram",34852:"SpectralSensitivity",34855:"ISOSpeedRatings",34856:"OECF",37377:"ShutterSpeedValue",37378:"ApertureValue",37379:"BrightnessValue",37380:"ExposureBias",37381:"MaxApertureValue",37382:"SubjectDistance",37383:"MeteringMode",37384:"LightSource",37385:"Flash",37396:"SubjectArea",37386:"FocalLength",41483:"FlashEnergy",41484:"SpatialFrequencyResponse",41486:"FocalPlaneXResolution",41487:"FocalPlaneYResolution",41488:"FocalPlaneResolutionUnit",41492:"SubjectLocation",41493:"ExposureIndex",41495:"SensingMethod",41728:"FileSource",41729:"SceneType",41730:"CFAPattern",41985:"CustomRendered",41986:"ExposureMode",41987:"WhiteBalance",41988:"DigitalZoomRation",41989:"FocalLengthIn35mmFilm",41990:"SceneCaptureType",41991:"GainControl",41992:"Contrast",41993:"Saturation",41994:"Sharpness",41995:"DeviceSettingDescription",41996:"SubjectDistanceRange",40965:"InteroperabilityIFDPointer",42016:"ImageUniqueID"};EXIF.TiffTags={256:"ImageWidth",257:"ImageHeight",34665:"ExifIFDPointer",34853:"GPSInfoIFDPointer",40965:"InteroperabilityIFDPointer",258:"BitsPerSample",259:"Compression",262:"PhotometricInterpretation",274:"Orientation",277:"SamplesPerPixel",284:"PlanarConfiguration",530:"YCbCrSubSampling",531:"YCbCrPositioning",282:"XResolution",283:"YResolution",296:"ResolutionUnit",273:"StripOffsets",278:"RowsPerStrip",279:"StripByteCounts",513:"JPEGInterchangeFormat",514:"JPEGInterchangeFormatLength",301:"TransferFunction",318:"WhitePoint",319:"PrimaryChromaticities",529:"YCbCrCoefficients",532:"ReferenceBlackWhite",306:"DateTime",270:"ImageDescription",271:"Make",272:"Model",305:"Software",315:"Artist",33432:"Copyright"};EXIF.GPSTags={0:"GPSVersionID",1:"GPSLatitudeRef",2:"GPSLatitude",3:"GPSLongitudeRef",4:"GPSLongitude",5:"GPSAltitudeRef",6:"GPSAltitude",7:"GPSTimeStamp",8:"GPSSatellites",9:"GPSStatus",10:"GPSMeasureMode",11:"GPSDOP",12:"GPSSpeedRef",13:"GPSSpeed",14:"GPSTrackRef",15:"GPSTrack",16:"GPSImgDirectionRef",17:"GPSImgDirection",18:"GPSMapDatum",19:"GPSDestLatitudeRef",20:"GPSDestLatitude",21:"GPSDestLongitudeRef",22:"GPSDestLongitude",23:"GPSDestBearingRef",24:"GPSDestBearing",25:"GPSDestDistanceRef",26:"GPSDestDistance",27:"GPSProcessingMethod",28:"GPSAreaInformation",29:"GPSDateStamp",30:"GPSDifferential"};EXIF.StringValues={ExposureProgram:{0:"Not defined",1:"Manual",2:"Normal program",3:"Aperture priority",4:"Shutter priority",5:"Creative program",6:"Action program",7:"Portrait mode",8:"Landscape mode"},MeteringMode:{0:"Unknown",1:"Average",2:"CenterWeightedAverage",3:"Spot",4:"MultiSpot",5:"Pattern",6:"Partial",255:"Other"},LightSource:{0:"Unknown",1:"Daylight",2:"Fluorescent",3:"Tungsten (incandescent light)",4:"Flash",9:"Fine weather",10:"Cloudy weather",11:"Shade",12:"Daylight fluorescent (D 5700 - 7100K)",13:"Day white fluorescent (N 4600 - 5400K)",14:"Cool white fluorescent (W 3900 - 4500K)",15:"White fluorescent (WW 3200 - 3700K)",17:"Standard light A",18:"Standard light B",19:"Standard light C",20:"D55",21:"D65",22:"D75",23:"D50",24:"ISO studio tungsten",255:"Other"},Flash:{0:"Flash did not fire",1:"Flash fired",5:"Strobe return light not detected",7:"Strobe return light detected",9:"Flash fired, compulsory flash mode",13:"Flash fired, compulsory flash mode, return light not detected",15:"Flash fired, compulsory flash mode, return light detected",16:"Flash did not fire, compulsory flash mode",24:"Flash did not fire, auto mode",25:"Flash fired, auto mode",29:"Flash fired, auto mode, return light not detected",31:"Flash fired, auto mode, return light detected",32:"No flash function",65:"Flash fired, red-eye reduction mode",69:"Flash fired, red-eye reduction mode, return light not detected",71:"Flash fired, red-eye reduction mode, return light detected",73:"Flash fired, compulsory flash mode, red-eye reduction mode",77:"Flash fired, compulsory flash mode, red-eye reduction mode, return light not detected",79:"Flash fired, compulsory flash mode, red-eye reduction mode, return light detected",89:"Flash fired, auto mode, red-eye reduction mode",93:"Flash fired, auto mode, return light not detected, red-eye reduction mode",95:"Flash fired, auto mode, return light detected, red-eye reduction mode"},SensingMethod:{1:"Not defined",2:"One-chip color area sensor",3:"Two-chip color area sensor",4:"Three-chip color area sensor",5:"Color sequential area sensor",7:"Trilinear sensor",8:"Color sequential linear sensor"},SceneCaptureType:{0:"Standard",1:"Landscape",2:"Portrait",3:"Night scene"},SceneType:{1:"Directly photographed"},CustomRendered:{0:"Normal process",1:"Custom process"},WhiteBalance:{0:"Auto white balance",1:"Manual white balance"},GainControl:{0:"None",1:"Low gain up",2:"High gain up",3:"Low gain down",4:"High gain down"},Contrast:{0:"Normal",1:"Soft",2:"Hard"},Saturation:{0:"Normal",1:"Low saturation",2:"High saturation"},Sharpness:{0:"Normal",1:"Soft",2:"Hard"},SubjectDistanceRange:{0:"Unknown",1:"Macro",2:"Close view",3:"Distant view"},FileSource:{3:"DSC"},Components:{0:"",1:"Y",2:"Cb",3:"Cr",4:"R",5:"G",6:"B"}};function findEXIFinJPEG(oFile){var aMarkers=[];if(oFile.getByteAt(0)!=255||oFile.getByteAt(1)!=216){return false}var iOffset=2;var iLength=oFile.getLength();while(iOffset<iLength){if(oFile.getByteAt(iOffset)!=255){if(bDebug)console.log("Not a valid marker at offset "+iOffset+", found: "+oFile.getByteAt(iOffset));return false}var iMarker=oFile.getByteAt(iOffset+1);if(iMarker==22400){if(bDebug)console.log("Found 0xFFE1 marker");return readEXIFData(oFile,iOffset+4,oFile.getShortAt(iOffset+2,true)-2);iOffset+=2+oFile.getShortAt(iOffset+2,true)}else if(iMarker==225){if(bDebug)console.log("Found 0xFFE1 marker");return readEXIFData(oFile,iOffset+4,oFile.getShortAt(iOffset+2,true)-2)}else{iOffset+=2+oFile.getShortAt(iOffset+2,true)}}}function readTags(oFile,iTIFFStart,iDirStart,oStrings,bBigEnd){var iEntries=oFile.getShortAt(iDirStart,bBigEnd);var oTags={};for(var i=0;i<iEntries;i++){var iEntryOffset=iDirStart+i*12+2;var strTag=oStrings[oFile.getShortAt(iEntryOffset,bBigEnd)];if(!strTag&&bDebug)console.log("Unknown tag: "+oFile.getShortAt(iEntryOffset,bBigEnd));oTags[strTag]=readTagValue(oFile,iEntryOffset,iTIFFStart,iDirStart,bBigEnd)}return oTags}function readTagValue(oFile,iEntryOffset,iTIFFStart,iDirStart,bBigEnd){var iType=oFile.getShortAt(iEntryOffset+2,bBigEnd);var iNumValues=oFile.getLongAt(iEntryOffset+4,bBigEnd);var iValueOffset=oFile.getLongAt(iEntryOffset+8,bBigEnd)+iTIFFStart;switch(iType){case 1:case 7:if(iNumValues==1){return oFile.getByteAt(iEntryOffset+8,bBigEnd)}else{var iValOffset=iNumValues>4?iValueOffset:iEntryOffset+8;var aVals=[];for(var n=0;n<iNumValues;n++){aVals[n]=oFile.getByteAt(iValOffset+n)}return aVals}break;case 2:var iStringOffset=iNumValues>4?iValueOffset:iEntryOffset+8;return oFile.getStringAt(iStringOffset,iNumValues-1);break;case 3:if(iNumValues==1){return oFile.getShortAt(iEntryOffset+8,bBigEnd)}else{var iValOffset=iNumValues>2?iValueOffset:iEntryOffset+8;var aVals=[];for(var n=0;n<iNumValues;n++){aVals[n]=oFile.getShortAt(iValOffset+2*n,bBigEnd)}return aVals}break;case 4:if(iNumValues==1){return oFile.getLongAt(iEntryOffset+8,bBigEnd)}else{var aVals=[];for(var n=0;n<iNumValues;n++){aVals[n]=oFile.getLongAt(iValueOffset+4*n,bBigEnd)}return aVals}break;case 5:if(iNumValues==1){return oFile.getLongAt(iValueOffset,bBigEnd)/oFile.getLongAt(iValueOffset+4,bBigEnd)}else{var aVals=[];for(var n=0;n<iNumValues;n++){aVals[n]=oFile.getLongAt(iValueOffset+8*n,bBigEnd)/oFile.getLongAt(iValueOffset+4+8*n,bBigEnd)}return aVals}break;case 9:if(iNumValues==1){return oFile.getSLongAt(iEntryOffset+8,bBigEnd)}else{var aVals=[];for(var n=0;n<iNumValues;n++){aVals[n]=oFile.getSLongAt(iValueOffset+4*n,bBigEnd)}return aVals}break;case 10:if(iNumValues==1){return oFile.getSLongAt(iValueOffset,bBigEnd)/oFile.getSLongAt(iValueOffset+4,bBigEnd)}else{var aVals=[];for(var n=0;n<iNumValues;n++){aVals[n]=oFile.getSLongAt(iValueOffset+8*n,bBigEnd)/oFile.getSLongAt(iValueOffset+4+8*n,bBigEnd)}return aVals}break}}function readEXIFData(oFile,iStart,iLength){if(oFile.getStringAt(iStart,4)!="Exif"){if(bDebug)console.log("Not valid EXIF data! "+oFile.getStringAt(iStart,4));return false}var bBigEnd;var iTIFFOffset=iStart+6;if(oFile.getShortAt(iTIFFOffset)==18761){bBigEnd=false}else if(oFile.getShortAt(iTIFFOffset)==19789){bBigEnd=true}else{if(bDebug)console.log("Not valid TIFF data! (no 0x4949 or 0x4D4D)");return false}if(oFile.getShortAt(iTIFFOffset+2,bBigEnd)!=42){if(bDebug)console.log("Not valid TIFF data! (no 0x002A)");return false}if(oFile.getLongAt(iTIFFOffset+4,bBigEnd)!=8){if(bDebug)console.log("Not valid TIFF data! (First offset not 8)",oFile.getShortAt(iTIFFOffset+4,bBigEnd));return false}var oTags=readTags(oFile,iTIFFOffset,iTIFFOffset+8,EXIF.TiffTags,bBigEnd);if(oTags.ExifIFDPointer){var oEXIFTags=readTags(oFile,iTIFFOffset,iTIFFOffset+oTags.ExifIFDPointer,EXIF.Tags,bBigEnd);for(var strTag in oEXIFTags){switch(strTag){case"LightSource":case"Flash":case"MeteringMode":case"ExposureProgram":case"SensingMethod":case"SceneCaptureType":case"SceneType":case"CustomRendered":case"WhiteBalance":case"GainControl":case"Contrast":case"Saturation":case"Sharpness":case"SubjectDistanceRange":case"FileSource":oEXIFTags[strTag]=EXIF.StringValues[strTag][oEXIFTags[strTag]];break;case"ExifVersion":case"FlashpixVersion":oEXIFTags[strTag]=String.fromCharCode(oEXIFTags[strTag][0],oEXIFTags[strTag][1],oEXIFTags[strTag][2],oEXIFTags[strTag][3]);break;case"ComponentsConfiguration":oEXIFTags[strTag]=EXIF.StringValues.Components[oEXIFTags[strTag][0]]+EXIF.StringValues.Components[oEXIFTags[strTag][1]]+EXIF.StringValues.Components[oEXIFTags[strTag][2]]+EXIF.StringValues.Components[oEXIFTags[strTag][3]];break}oTags[strTag]=oEXIFTags[strTag]}}if(oTags.GPSInfoIFDPointer){var oGPSTags=readTags(oFile,iTIFFOffset,iTIFFOffset+oTags.GPSInfoIFDPointer,EXIF.GPSTags,bBigEnd);for(var strTag in oGPSTags){switch(strTag){case"GPSVersionID":oGPSTags[strTag]=oGPSTags[strTag][0]+"."+oGPSTags[strTag][1]+"."+oGPSTags[strTag][2]+"."+oGPSTags[strTag][3];break}oTags[strTag]=oGPSTags[strTag]}}return oTags}EXIF.readFromBinaryFile=function(oFile){return findEXIFinJPEG(oFile)}})();