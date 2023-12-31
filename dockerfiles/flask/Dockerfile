# syntax=docker/dockerfile:1

# Start with basic linux container and python image
#FROM python:3.9-alpine3.15
FROM tensorflow/tensorflow:2.9.2-gpu
# dependencies for matplotlib
# RUN #apk add g++ jpeg-dev zlib-dev libjpeg make
RUN apt-get update
RUN apt-get install g++ make
RUN apt-get install libjpeg-dev -y
RUN apt-get install zlib1g-dev -y

# dependencies for pydicom; python-gdcm
# RUN apk add cmake swig git patchelf
RUN apt-get install cmake swig git patchelf -y

#CMD ["bash", "-c", "pip install jupyterlab"]
RUN /usr/local/bin/python -m pip install --upgrade pip
RUN pip3 install Flask
RUN pip3 install flask-restx
RUN pip3 install gevent
RUN pip3 install numpy
RUN pip3 install matplotlib
RUN pip3 install pandas
RUN pip3 install pydicom
RUN pip3 install pyorthanc
RUN pip3 install python-gdcm
RUN pip3 install pylibjpeg
RUN pip3 install tensorflow
RUN pip3 install tensorflow-addons
RUN pip3 install scikit-image
RUN pip3 install tqdm
RUN pip3 install openai


CMD ["/root/flask_backend.py"]
ENTRYPOINT ["python"]
