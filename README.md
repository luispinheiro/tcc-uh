REST PHP TCC
=================



## Links

See the following links for more information on MQTT:

- XAMPP page: <https://www.apachefriends.org/pt_br/download_success.html>
- Download portable 7.4.33: <https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.4.33/xampp-portable-windows-x64-7.4.33-0-VC15.zip/download>

## Installing

See <https://mosquitto.org/download/> for details on installing binaries for
various platforms.

See <https://www.apachefriends.org/pt_br/download_success.html> for details on installing binaries for
various platforms.

## Quick start

If you have installed a binary package the broker should have been started
automatically. If not, it can be started with a basic configuration:

    mosquitto

Then use `mosquitto_sub` to subscribe to a topic:

    mosquitto_sub -t 'test/topic' -v

And to publish a message:

    mosquitto_pub -t 'test/topic' -m 'hello world'

## Documentation

Documentation for the broker, clients and client library API can be found in
the man pages, which are available online at <https://mosquitto.org/man/>. There
are also pages with an introduction to the features of MQTT, the
`mosquitto_passwd` utility for dealing with username/passwords, and a
description of the configuration file options available for the broker.

Detailed client library API documentation can be found at <https://mosquitto.org/api/>

## Building from source

To build from source the recommended route for end users is to download the
archive from <https://mosquitto.org/download/>.

On Windows and Mac, use `cmake` to build. On other platforms, just run `make`
to build. For Windows, see also `README-windows.md`.

If you are building from the git repository then the documentation will not
already be built. Use `make binary` to skip building the man pages, or install
`docbook-xsl` on Debian/Ubuntu systems.

### Build Dependencies

* c-ares (libc-ares-dev on Debian based systems) - only when compiled with `make WITH_SRV=yes`
* cJSON - for client JSON output support. Disable with `make WITH_CJSON=no` Auto detected with CMake.
* libwebsockets (libwebsockets-dev) - enable with `make WITH_WEBSOCKETS=yes`
* openssl (libssl-dev on Debian based systems) - disable with `make WITH_TLS=no`
* pthreads - for client library thread support. This is required to support the
  `mosquitto_loop_start()` and `mosquitto_loop_stop()` functions. If compiled
  without pthread support, the library isn't guaranteed to be thread safe.
* uthash / utlist - bundled versions of these headers are provided, disable their use with `make WITH_BUNDLED_DEPS=no`
* xsltproc (xsltproc and docbook-xsl on Debian based systems) - only needed when building from git sources - disable with `make WITH_DOCS=no`

Equivalent options for enabling/disabling features are available when using the CMake build.


## Credits

Mosquitto was written by Roger Light <roger@atchoo.org>

Master: [![Travis Build Status (master)](https://travis-ci.org/eclipse/mosquitto.svg?branch=master)](https://travis-ci.org/eclipse/mosquitto)
Develop: [![Travis Build Status (develop)](https://travis-ci.org/eclipse/mosquitto.svg?branch=develop)](https://travis-ci.org/eclipse/mosquitto)
Fixes: [![Travis Build Status (fixes)](https://travis-ci.org/eclipse/mosquitto.svg?branch=fixes)](https://travis-ci.org/eclipse/mosquitto)
