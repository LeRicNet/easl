# syntax=docker/dockerfile:1
FROM rocker/rstudio:latest
CMD ["bash"]
LABEL org.opencontainers.image.licenses=GPL-2.0-or-later org.opencontainers.image.source=https://github.com/rocker-org/rocker-versioned2 org.opencontainers.image.vendor=Rocker Project org.opencontainers.image.authors=Carl Boettiger <cboettig@ropensci.org>
ENV R_VERSION=4.2.0
ENV R_HOME=/usr/local/lib/R
ENV TZ=Etc/UTC
COPY scripts/install_R_source.sh /rocker_scripts/install_R_source.sh # buildkit
RUN /bin/sh -c /rocker_scripts/install_R_source.sh # buildkit
ENV CRAN=https://packagemanager.rstudio.com/cran/__linux__/focal/latest
ENV LANG=en_US.UTF-8
COPY scripts /rocker_scripts # buildkit
RUN /bin/sh -c /rocker_scripts/setup_R.sh # buildkit
CMD ["R"]
LABEL org.opencontainers.image.licenses=GPL-2.0-or-later org.opencontainers.image.source=https://github.com/rocker-org/rocker-versioned2 org.opencontainers.image.vendor=Rocker Project org.opencontainers.image.authors=Carl Boettiger <cboettig@ropensci.org>
ENV S6_VERSION=v2.1.0.2
ENV RSTUDIO_VERSION=2022.02.2+485
ENV DEFAULT_USER=rstudio
ENV PANDOC_VERSION=default
ENV PATH=/usr/lib/rstudio-server/bin:/usr/local/sbin:/usr/local/bin:/usr/sbin:/usr/bin:/sbin:/bin
RUN /bin/sh -c /rocker_scripts/install_rstudio.sh # buildkit
RUN /bin/sh -c /rocker_scripts/install_pandoc.sh # buildkit
EXPOSE map[8787/tcp:{}]
RUN apk add libgsl1-dev
CMD ["/init"]