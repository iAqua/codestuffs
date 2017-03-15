<?php
$CODEBLK_ENDADR = ((0x00100000 + 0x00277000 + 0x00064000 + 0x0000A000 + 0x00045920) + 0xfff) & ~0xfff;
$OSSCRO_HEAPADR = 0x08133000;
$WEBKITCRO_HEAPADR = 0x0840e000;
$PEERCRO_HEAPADR = 0x0831a000;
$APPHEAP_PHYSADDR = 0x2b000000;
init_mapaddrs_cro();

$STACKPIVOT_ADR = 0x0027b640;
$COND_THROWFATALERR = 0x00262c74;

$ROP_POP_R0R6PC = 0x001df87c;
$ROP_POP_R0R8PC = 0x0030ca48;
$ROP_POP_R0PC = 0x0029736c;
$ROP_POP_R1R5PC = 0x001dce5c;

$ROP_STR_R1TOR0 = 0x00226814;
$ROP_LDR_R0FROMR0 = 0x001f7930;
$ROP_ADDR0_TO_R1 = 0x0027bef0;

$ROP_WRITETHREADSTORAGEPTR_TOR4R5 = 0x00297a10;

$srv_GetServiceHandle = 0x001eab88;

$svcGetProcessId = 0x0026c134;
$svcSendSyncRequest = 0x001eb1c4;
$svcControlMemory = 0x002639e4;
$svcSleepThread = 0x002d91dc;

$GXLOW_CMD4 = 0x002a29a0;
$GSPGPU_SERVHANDLEADR = 0x003e33d0;

$FS_MOUNTSDMC = 0x00319450;

$IFile_Open = 0x00322a04;
$IFile_GetSize = 0x001f1f08;
$IFile_Seek = 0x0032e06c;
$IFile_Read = 0x0030cb6c;

$FS_DELETEFILE = 0x00326234;

$FSFILEIPC_CLOSE = 0x00268290;
$FSFILEIPC_READ = 0x00268238;
$FSFILEIPC_GETSIZE = 0x00335058;

$POPPC = 0x001df698;

$ROP_STR_R0TOR1 = $WEBKITCRO_MAPADR+0x00422aa0;

$WKC_FOPEN = $OSSCRO_MAPADR+0xdf95c-0x4;
$WKC_FCLOSE = $OSSCRO_MAPADR+0xdf94c-0x4;
$WKC_FREAD = $OSSCRO_MAPADR+0xdf954-0x4;
$WKC_FWRITE = $OSSCRO_MAPADR+0xdf964-0x4;
$WKC_FSEEK = $PEERCRO_MAPADR+0x2dfb9;

$ROP_curl_easy_cleanup = $WEBKITCRO_MAPADR+0x4dc0b8-0x4;
$ROP_curl_easy_init = $WEBKITCRO_MAPADR+0x4dbc18-0x4;
$ROP_curl_easy_perform = $WEBKITCRO_MAPADR+0x4dc228-0x4;
$ROP_curl_easy_setopt = $WEBKITCRO_MAPADR+0x4dbc20-0x4;

$ROP_MEMCPY = $WEBKITCRO_MAPADR+0x4db4c0-0x4;
$ROP_MEMSETOTHER = $WEBKITCRO_MAPADR+0x4db4a0-0x4;

$ROP_snprintf = $OSSCRO_MAPADR+0xdf754-0x4;

$GSP_FLUSHDCACHE = 0x0029dfe4;
$GSP_WRITEHWREGS = 0x0029880c;

$IFile_Close = 0x001ec6ac;
$IFile_Write = 0x00327978;

$THROW_FATALERR = 0x001f1ed8;

$ROP_LDMSTM_R5R4_R0R3 = 0x001e8bb4;

$ROP_POP_R0IPPC = $WEBKITCRO_MAPADR+0x001b2ce4;

$ROP_LDR_R0_FROMR0_SHIFTR1 = $OSSCRO_MAPADR+0x00103d54;

$ROP_STMR0_R0PC = $PEERCRO_MAPADR+0x0002d6cd;
?>